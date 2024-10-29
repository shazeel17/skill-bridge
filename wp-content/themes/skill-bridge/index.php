<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body class="bg-white-97 ">
    



    <?php get_header(); ?>


    <div class="w-full sm:w-3/4 md:w-1/2 mx-auto mt-10">
        <img src="<?php echo get_template_directory_uri(); ?>./images/abstract.svg" alt="Abstract line" class="relative top-[17px] right-[28px] w-auto">
        <div class="flex p-2 md:p-4  justify-center items-center gap-2 rounded-lg  border-white bg-white-99">
            <i class="fa-solid fa-bolt w-12 h-12 flex p-4 justify-center items-center gap-2 rounded-md bg-orange-95 text-xl"></i>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-[150%]">
                <span class="text-orange-50 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold">Unlock</span>
                <span class="block sm:inline text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold"> Your Creative Potential</span>
            </h1>
        </div>
    </div>


    <div class="text-center mt-6">
        <h2 class="text-grey-15 text-center  text-[28px] font-medium leading-[150%] md:text-[32px] ">
            with Online Design and Development Courses.
        </h2>
        <p class="text-center mt-4 font-normal leading-[150%] text-[#262626] text-sm sm:text-base md:text-lg lg:text-xl">Learn from Industry Experts and Enhance Your Skills.</p>
    </div>

    <div class="text-center mt-[64px] space-x-4">
        <button class="  items-center gap-2 px-4 py-2 sm:px-5 sm:py-3 rounded-md bg-orange-50 text-center text-[14px] sm:text-[16px] md:text-[18px] font-semibold leading-[21px] text-white-99">Explore Courses</button>
        <button class=" items-center gap-2 px-4 py-2 sm:px-5 sm:py-3 rounded-md border border-white-95 bg-white-99 text-center text-[14px] sm:text-[16px] md:text-[18px] font-medium leading-[21px] text-[#262626] ">View Pricing</button>
    </div>
    <div class="container mx-auto ">
        <section class="bg-white-99 mt-5">
            <div class="p-3 mt-[100px]">
                <ul class="flex  flex-wrap justify-around items-center m-0 space-x-4">

                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/zapier.svg" class="w-24 h-auto" alt="zapier">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/spotify.svg" class="w-24 h-auto" alt="spotify">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/zoom.svg" class="w-24 h-auto" alt="zoom">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/amazon.svg" class="w-24 h-auto" alt="amazon">
                    </li>
                    <li>
                        <img src=" <?php echo get_template_directory_uri(); ?> ./images/adobe.svg" class="w-24 h-auto" alt="adobe">
                    </li>
                    <li>
                        <img src=" <?php echo get_template_directory_uri(); ?> ./images/notion.svg" class="w-24 h-auto" alt="notion">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/netflix.svg" class="w-24 h-auto" alt="netflix">
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>