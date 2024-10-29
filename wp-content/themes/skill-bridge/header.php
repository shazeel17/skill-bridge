<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bridge Skill</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/899352ce90.js" crossorigin="anonymous"></script>


        <link rel="<?php echo get_template_directory_uri(); ?>stylesheet" href="./tailwind.css">
        <!-- <style>
            ul .menu-item-28 {
                background-color: #FF9500;
                padding: 10px 20px;
                border-radius: 10px;
                color: white;
            }
        </style> -->

        <script>
            tailwind.config = {
                theme: {
                    colors: {
                        absolute: {
                            white: '#FFF',
                            black: '#000',
                        },
                        orange: {
                            50: '#FF9500',
                            70: '#FFBF66',
                            75: '#FFCA80',
                            80: '#FFD499',
                            90: '#FFEACC',
                            95: '#FFF4E5',
                            97: '#FFF9F0',
                            99: '#FFFDFA',
                        },

                        white: {
                            90: '#E4E4E7',
                            95: '#F1F1F3',
                            97: '#F7F7F8',
                            99: '#FCFCFD',

                        },
                        grey: {
                            10: '#191919',
                            15: '#262626',
                            20: '#333333',
                            30: '#4C4C4D',
                            35: '#59595A',
                            40: '#656567',
                            60: '#98989A',
                            70: '#B3B3B3'
                        }

                    }
                }
            }
        </script>

    </head>

    <body class="bg-white-97 ">
        <div class=" px-4 sm:px-6 md:px-8 mt-[20px] space ">
            <div class="grid gap-2">
                <button class="flex py-2.5 px-0 md:py-4 justify-center items-center gap-6 self-stretch rounded-[6px] bg-orange-50 text-white-95  text-sm normal-case font-normal leading-[150%]">
                    Free Courses 🌟 Sale Ends Soon, Get It Now
                    <svg class="h-[20px] w-[20px] text-white-95" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="15" y1="16" x2="19" y2="12" />
                        <line x1="15" y1="8" x2="19" y2="12" />
                    </svg>
                </button>
            </div>
        </div>
        <header class="bg-white ">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center ">

                <div class="flex items-center space-x-2">

                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }

                    ?>
                </div>

                <div class="md:hidden">
                    <input type="checkbox" id="menu-toggle" class="hidden peer">
                    <label for="menu-toggle" class="cursor-pointer text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </label>
                </div>

                <nav class="flex hidden peer-checked:flex flex-col md:flex md:flex-row md:space-x-8 py-2 md:py-4 lg:py-6 px-4 md:px-[60px] justify-between items-center border-b border-white-95 mr-auto ml-[50px]">
                    <?php
                    //  wp_nav_menu(
                    //     array(
                    //         'theme_location' => 'primary',
                    //         'items_wrap'  => '<ul id="menu-top" class="menu" style="display: flex; justify-content: center;  color: black; padding: 10px 0; margin: 0; list-style: none; gap: 20px;">%3$s  </ul>',
                    //     )

                    // ) 

                    $menu_items = wp_get_nav_menu_items("nav-menu");
                    echo '<ul class="flex space-x-4">';
                    foreach ($menu_items as $menu_item) {
                        echo '<li class="list-none">';
                        echo '<a href=' . " .$menu_item->url" . ' class="px-4 py-2 rounded-md hover:bg-gray-200">';
                        echo $menu_item->title;
                        echo '</a></li>';
                    }
                    echo '</ul>';
                    ?>
                </nav>

                <div class="space-x-4 hidden md:block">

                    <?php
                    // wp_nav_menu(
                    //     array(
                    //          'theme_location' => 'secondary',
                    //          'menu_class'      => 'nav flex items-center gap-4',
                    //          )  )




                    $menu_items = wp_get_nav_menu_items("side-menu");
                    echo "<ul class='flex space-x-4'>";

                    foreach ($menu_items as $menu_item) {
                    
                        // $buttonClass = ($menu_item->title === "login")
                        //     ? " text-white-99 "
                        //     : (($menu_item->title === "signup")
                        //         ? " text-white" : "text-gray-700 ");

                        echo "<li>";
                        echo "<a href='" . esc_url($menu_item->url) . "' class='px-4 py-2 rounded-md '>";
                        echo esc_html($menu_item->title);
                        echo "</a></li>";
                    }
                    echo "</ul>";



                    ?>
                </div>
            </div>


        </header>
    </body>

    </html>