<footer class="footer-section mt-16 flex flex-col p-[60px_80px_20px_80px] bg-white-99">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <div class="col-span-1">
         <?php
         if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
         ?>
        <ul class="list-none mt-4">
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/mail.svg" alt="mail-Icon" class="mr-2">
            <span class="paragraph">hello@skillbridge.com</span>
          </li>
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/call.svg" alt="phone-Icon" class="mr-2">
            <span class="paragraph">+91 91813 23 2409</span>
          </li>
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/location.svg" alt="location-Icon" class="mr-2">
            <span class="paragraph">Somewhere in the World</span>
          </li>
        </ul>          
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">Home</h5>
        <ul class="list-none">
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Benefits</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Courses</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Testimonials</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our FAQ</li>  
        </ul>
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">About Us</h5>
        <ul class="list-none">
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Company</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Achievements</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Goals</li>  
        </ul>
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">Social Profiles</h5>
        <div class="flex gap-5 pt-3">
          <img src="<?php echo get_template_directory_uri() ?> ./images/fb.svg " class="p-4   px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97" alt="Facebook" class="w-12 h-12">
          <img src="<?php echo get_template_directory_uri() ?> ./images/twitter.svg" class="p-4   px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97" alt="Twitter" class="w-12 h-12">
          <img src="<?php echo get_template_directory_uri() ?> ./images/in.svg" class="p-4   px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97" alt="inden" class="w-12 h-12">    
        </div>
      </div>
    </div>
    
    <hr class="my-5 text-white-95"> 

    <div class="text-center copyright-text">
      <p class="">© 2023 Skillbridge. All rights reserved.</p>
    </div>
  </div>
</footer>
</body>

</html> 