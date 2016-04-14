$(document).ready(function(){
  // Move about section down below the nav bar
  var nav = $('#top-nav');
  var menu = $('#vertical-menu');	
  var nav_height = nav.css('height');
  var top_section = $('#top-of-page');
  top_section.css('height', nav_height);
  
  // Center the avatar
  var parent_height = $('#about-section').prop('scrollHeight');
  var parent_width = $('#about-section').prop('scrollWidth');
  var avatar_height = $('#avatar').prop('scrollHeight');
  var avatar_top = (parent_height - avatar_height) / 3;
  $('#avatar').css('margin-top', avatar_top + 'px');
  $('#avatar').css('width', (parent_width * 0.3) + 'px');
  
  // Place the about-text in the center vertically
  var text_height = $('#about-text').prop('scrollHeight');
  var text_top = (parent_height - text_height) / 3;
  $('#about-text').css('margin-top', text_top + 'px');
  
  // Hide left edge of the text under the image
  var half_avatar_width = $('#avatar').prop('scrollWidth') / 2;
  var width_val = parent_width - half_avatar_width;
  $('#about-text').css('width', width_val + 'px');
  $('#about-text').css('padding-left', (half_avatar_width *1.2) + 'px');
  
  // Scrolling sections
  $('.local-link').click(function (e) {
	  // Scroll to ID
	  e.preventDefault();
	  var target = e.currentTarget.hash;
	  var y = $(target).offset().top - parseInt(nav_height);
	  $('html, body').animate({scrollTop: y}, 1000);
	  
	  // Hide vertical menu, if visible.
	  $('#vertical-menu').css('display', 'none');
  });
  
  // Show hidden menu on small displays.
  $('#hamburger-link').click(function(e){
	  e.preventDefault();  
	  menu.css('display', 'block');
	  
	  // Set the location of the menu after it has been displayed.
	  var link = $('#hamburger-link');
	  var x = link.position().left + link.prop('scrollWidth') - menu.prop('scrollWidth');
	  var y = nav.prop('scrollHeight');
	  
	  menu.css('left', x + 'px');
	  menu.css('top', y + 'px');
	  menu.focus();
  });
});