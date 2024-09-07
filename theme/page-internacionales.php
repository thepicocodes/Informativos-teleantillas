<?php

/**
 *
 * Template Name: internacionales Page
 *
 * @package info_teleantillas
 */
get_header();
?>
<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="w-full h-40 xl:h-[274px] mb-5 p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <!--  -->
    <div class="flex items-center justify-between">
      <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Lo más vistos</h5>
      <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillasDark">
        Ver más
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillasDark" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
      </a>
    </div>

    <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
      <article class="relative w-full h-full max-h-[460px] bg-gradient-to-t from-overlay-100 to-overlay-0">
        <a href="#" class="relative block w-full h-full bg-white">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
          <div class="rounded-lg h-full relative z-[1] p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
            <p class="mt-2 text-xl lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <div class="mt-2 text-xs text-lightBlue-100">
              Victor Santana • 08/04/2024 14:51
            </div>
          </div>
        </a>
      </article>

      <div class="flex flex-col gap-5">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-ta-live.png" alt="" class="w-full h-[115px]">
        </a>

        <a href="/" class="mid-block">
          <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
            <div class="content">
              <div class="w-full py-4 px-2">
                <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>
            </div>
            <div class="image w-40%" style="overflow: hidden; position: relative">
              <div class="h-full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
              </div>
            </div>
          </article>
        </a>

        <a href="/" class="mid-block">
          <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
            <div class="content">
              <div class="w-full py-4 px-2">
                <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>
            </div>
            <div class="image w-40%" style="overflow: hidden; position: relative">
              <div class="h-full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
              </div>
            </div>
          </article>
        </a>
      </div>
    </div>

    <section class="mt-10">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Nacionales</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillas">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">

          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <!--  -->
    <section class="mt-20">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Internacionales</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillasDark">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <article class="relative w-full h-full max-h-[460px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
            <div class="rounded-lg h-full relative z-[1] p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-xl lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="flex flex-col gap-5">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Deportes</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillas">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">

          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <!--  -->
    <section class="mt-20">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Política</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillasDark">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <article class="relative w-full h-full max-h-[460px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
            <div class="rounded-lg h-full relative z-[1] p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-xl lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="flex flex-col gap-5">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Salud</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillas">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Deportes</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillas">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Tecnología</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillas">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Espectáculos</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillasDark">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillasDark" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <article class="relative w-full h-full max-h-[460px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
            <div class="rounded-lg h-full relative z-[1] p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-xl lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="flex flex-col gap-5">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>

      <div class="mt-10">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

            <a href="/" class="mid-block">
              <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
                <div class="content">
                  <div class="w-full py-4 px-2">
                    <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40%" style="overflow: hidden; position: relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                  </div>
                </div>
              </article>
            </a>

            <a href="/" class="mid-block">
              <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
                <div class="content">
                  <div class="w-full py-4 px-2">
                    <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40%" style="overflow: hidden; position: relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                  </div>
                </div>
              </article>
            </a>
          </div>

          <div class="relative h-[300px]">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <a href="#" class="relative block w-full h-full bg-white">
                <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                  <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

            <a href="/" class="mid-block">
              <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
                <div class="content">
                  <div class="w-full py-4 px-2">
                    <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40%" style="overflow: hidden; position: relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                  </div>
                </div>
              </article>
            </a>

            <a href="/" class="mid-block">
              <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
                <div class="content">
                  <div class="w-full py-4 px-2">
                    <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40%" style="overflow: hidden; position: relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                  </div>
                </div>
              </article>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-orange-InfTeleantillasDark">Sociales</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-InfTeleantillasDark">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-InfTeleantillasDark" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <article class="relative w-full h-full max-h-[460px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
            <div class="rounded-lg h-full relative z-[1] p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-xl lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="flex flex-col gap-5">
          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>

          <a href="/" class="mid-block">
            <article class="rounded-md border border-gray-100 w-full grid grid-cols-[60%_40%]" style="overflow: hidden; height: 140px;">
              <div class="content">
                <div class="w-full py-4 px-2">
                  <p class="lg:w-[16ch] mt-2 text-body-b text-blueLight-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
              </div>
              <div class="image w-40%" style="overflow: hidden; position: relative">
                <div class="h-full">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-full object-fit" style="object-fit: cover">
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>

    </section>

    <!-- add -->
    <div class="w-full h-40 xl:h-[274px] mt-10 mb-5 p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
  </div>

  <?php
  get_footer();
