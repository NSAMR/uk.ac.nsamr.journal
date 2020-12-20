/**
 * @file cypress/tests/functional/CustomBlocks.spec.js
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 */

describe('Custom Block Manager plugin tests', function() {
	it('Creates and exercises a custom block', function() {
		cy.login('admin', 'admin', 'publicknowledge');

		cy.get('ul[id="navigationPrimary"] a:contains("Settings")').click();
		cy.get('ul[id="navigationPrimary"] a:contains("Website")').click();
		cy.get('button[id="plugins-button"]').click();

		// Find and enable the plugin
		cy.get('input[id^="select-cell-customblockmanagerplugin-enabled"]').click();
		cy.get('div:contains(\'The plugin "Custom Block Manager" has been enabled.\')');
		cy.waitJQuery();

		cy.get('tr[id*="customblockmanagerplugin"] a.show_extras').click();
		cy.get('a[id*="customblockmanagerplugin-settings"]').click();

		// Create a new custom block.
		cy.get('a:contains("Add Block")').click();
		cy.wait(2000); // Avoid occasional failure due to form init taking time
		cy.get('form[id^="customBlockForm"] input[id^="blockName-"]').type('test-custom-block');
		cy.get('textarea[id^="blockContent-en_US-"]').then(node => {
			cy.setTinyMceContent(node.attr('id'), 'Here is my custom block.');
		});
		cy.get('form[id="customBlockForm"] button[id^="submitFormButton-"]').click();
		cy.waitJQuery();
		cy.wait(500); // Make sure the form has closed
		cy.get('.pkp_modal_panel > .close').click();

		// FIXME: The settings area has to be reloaded before the new block will appear.a
		// This click should be unnecessary.
		cy.get('ul[id="navigationPrimary"] a:contains("Settings")').click();
		cy.get('ul[id="navigationPrimary"] a:contains("Website")').click();
		cy.get('#appearance > .pkpTabs > .pkpTabs__buttons > #setup-button').click();
		cy.get('input[value ^= "test-custom-block"]').click();
		cy.get('#setup button:contains("Save")').click();
		cy.waitJQuery();

		cy.visit('/index.php/publicknowledge');
		cy.get('div:contains("Here is my custom block.")');
	});
})
