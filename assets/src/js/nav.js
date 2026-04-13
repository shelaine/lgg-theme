(function($){

    // Get all the parent elements
    const parentElements = document.querySelectorAll('.wp-block-navigation-item.has-child.open-on-hover-click.wp-block-navigation-submenu');

    // Add click event listener to each parent element
    parentElements.forEach(parent => {
        parent.addEventListener('click', () => {
        // Find the direct child element
        const childElement = parent.querySelector('.wp-block-navigation__submenu-container.wp-block-navigation-submenu');
        
        // Add the "show" class to the child element
        if (childElement) {
            childElement.classList.add('show');
        }
    
        // Check if the "Back" li element already exists
        const existingBackElement = parent.querySelector('.mob-child-back');
        if (!existingBackElement) {
            const ulElement = parent.querySelector('.wp-block-navigation__submenu-container');
            if (ulElement) {
            const backLiElement = document.createElement('li');
            backLiElement.className = 'mob-child-back';
            const imgElement = document.createElement('img');
            imgElement.src = WPURLS.theme_dir + '/assets/img/back-arrow.svg';
            imgElement.height = '10'; // Set the height here
            imgElement.className = 'back-arrow';
            backLiElement.appendChild(imgElement);
    
            const textNode = document.createTextNode('Back');
            backLiElement.appendChild(textNode);
    
            ulElement.insertBefore(backLiElement, ulElement.firstChild);
    
            // Add click event listener to the "Back" li element
            backLiElement.addEventListener('click', (event) => {
                event.stopPropagation();
                ulElement.classList.remove('show');
            });
            }
        }
        });
    });


    /*** ------------------
      Dynamic Menu Items
    ------------------ ***/


    var siteUrl = WPURLS.siteurl;
    var loginUrl = WPURLS.login;
    var logoutUrl = WPURLS.logout;
    var userStatus = WPURLS.user;

    var data = {
        action: 'is_user_logged_in'
    };
    
   
    if(userStatus == 'yes') {
        $('li.login-logout a').replaceWith('<a class="wp-block-navigation-item__content" href="'+logoutUrl+'"><span class="wp-block-navigation-item__label">Logout</span></a>');
        $('li.profile-register a').replaceWith('<a class="wp-block-navigation-item__content" href="'+ siteUrl +'/my-profile/"><span class="wp-block-navigation-item__label">My Profile</span></a>');
    } else {
        $('li.login-logout a').replaceWith('<a class="wp-block-navigation-item__content" href="'+loginUrl+'"><span class="wp-block-navigation-item__label">Login</span></a>');
        $('li.profile-register a').replaceWith('<a class="wp-block-navigation-item__content" href="' + siteUrl + '/programs/free-membership/join/"><span class="wp-block-navigation-item__label">Register</span></a>');
    }
    


    /** replace search menu text with icon  */

    $('li.search-icon a').html('<i class="fa-sharp fa-solid fa-magnifying-glass"></i>');

    $(".search-icon").click(function(e){
        e.preventDefault();
        $(".nav-search-cont").slideDown();
      });

      $(".close-nav-search").click(function(){
        $(".nav-search-cont").slideUp();
      });

      $('li.menu-login a').html('[ogin_link]');

      $('li.menu-reg a').html('[profile_reg]');


})(jQuery);

    /** replace login with dynamic login/logout link  */