<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailwindcss
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FishBEE-Craft Post</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6dfbd7ac06.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/app.css">
    <link rel="stylesheet" href="../public/css/post.css">

</head>

<body class="bg-white font-sans leading-normal tracking-normal">

<!--Nav-->
<nav class="bg-gray-900 p-4 mt-0 w-full opacity-80">
    <div class="container mx-auto flex items-center">
        <div class="flex text-white font-extrabold">
            <a href="../index.html"><img id="logo" class="" style="max-height:50px;"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"
                                         alt="FishBEE Logo"></a>
        </div>
        <div class="flex pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="mr-2">
                    <a class="inline-block py-2 px-2 text-white font-bold" href="../index.html">Home</a>
                </li>
                <li class="mr-2">
                    <a class="inline-block text-white font-bold hover:text-yellow-800 py-2 px-2"
                       href="resourses.html">Resources</a>
                </li>
                <li class="mr-2">
                    <a class="inline-block text-white font-bold hover:text-yellow-800 py-2 px-2"
                       href="blogs.html">Blog</a>
                </li>
                <li class="mr-2">
                    <a class="inline-block text-white font-bold hover:text-yellow-800 py-2 px-2"
                       href="products.html">Products</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--slide in nav-->
<div id="header" class="bg-white fixed w-full z-10 top-0 hidden animated" style="opacity: .95;">
    <div class="bg-white">
        <div class="flex flex-wrap items-center content-center">
            <div class="flex w-1/2 justify-start text-white font-extrabold">
                <a href="../index.html"><img id="logo" class="" style="max-height:50px;"
                                             src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"
                                             alt="FishBEE Logo"></a>
            </div>
            <div class="flex w-1/2 justify-end content-center">
                <p class="hidden sm:block mr-3 text-center h-14 p-4 text-xs"><span class="pr-2">Share
								this</span> ???? </p>
                <a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4"
                   href="https://twitter.com/intent/tweet?url=#" style="background-color:#33b1ff;">
                    <svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 32 32">
                        <path
                            d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z">
                        </path>
                    </svg>
                </a>
                <a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4"
                   href="https://www.facebook.com/sharer/sharer.php?u=#" style="background-color:#005e99">
                    <svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 32 32">
                        <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

    </div>
    <!--Progress bar-->
    <div id="progress" class="h-1 bg-white shadow"
         style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);">
    </div>
</div>

<!--Title-->
<div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-teal-500 font-bold">- 29 FEBRUARY 2020 -<span
            class="text-gray-900"></span></p>
    <h1 class="font-bold break-normal text-3xl md:text-5xl">FishBEE Blog Page</h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
     style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>