/**
 * Universal fly-out menu for XplodedThemes plugins
 * (c) XplodedThemes, 2021
 */

jQuery(document).ready(function ($) {
  $('#wff-button').on('click', function (e) {
    e.preventDefault();

    $('#wf-flyout').toggleClass('opened');
    $('#wff-overlay').toggle();

    return false;
  }); // open/close menu

  $('#wff-overlay').on('click', function (e) {
    e.preventDefault();

    $(this).hide();
    $('#wf-flyout').removeClass('opened');

    return false;
  }); // click on overlay - hide menu
}); // jQuery ready
