<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Carl Llemos">
    <meta name="description" content="Freelance WebDeveloper, Website Developer, Full Stack Web Developer">
    <meta name="keywords" content="Web Developer, Freelance, Full Stack Developer, Front End Developer, Back End Developer">
    <meta name="theme-color" content="#fff">
    <meta property="og:image" content="{{asset('images/profile.png')}}">
    <meta property="og:title" content="Portfolio | Carl Llemos">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
    <title>I'm Carl Llemos | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-100 px-3 text-white bg-slate-800 h-12 flex items-center">
        <div class="container md:container-lg mx-auto px-12 flex justify-center md:justify-between items-center">
            <ul class="hidden md:flex gap-5 text-xs font-rubiks font-semibold">
                <li class="flex items-center gap-2">
                    <box-icon name='mobile-alt' color='white'></box-icon>
                    <span>(09) 364 344 256</span>
                </li>
                <li class="flex items-center gap-2">
                    <box-icon name='envelope' color='white' ></box-icon>
                    <span>hello@iamcarlllemos.com</span>
                </li>
            </ul>
            <ul class="flex justify-center gap-5 text-xs">
                <li>
                    <box-icon type='logo' name='facebook-square'color='white'></box-icon>
                </li>
                <li>
                    <box-icon name='instagram' type='logo' color='white'></box-icon>
                </li>
                <li>
                    <box-icon type='logo' name='linkedin-square'color='white'></box-icon>
                </li>
                <li>
                    <box-icon name='github' type='logo' color='white'></box-icon>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu-parent" class="w-100 p-3">
        <div class="md:container-lg mx-auto px-3 md:px-12">
            <div class="flex justify-between items-center">
                <div class="logo">
                    <img src="{{asset('images/logo-dark.png')}}" alt="logo" class="w-12 md:w-14">
                </div>
                <div id="menu" class="fixed lg:relative txt-white lg:text-slate-900 bg-slate-800 lg:bg-transparent w-full lg:w-auto bottom-0 left-0 h-96 lg:h-auto z-50 flex lg:block justify-center items-center rounded-t-3xl shadow-2xl lg:shadow-none active translate-y-[100%] lg:translate-y-[0%]" style="transition: ease 0.8s">
                    <div class="lg:hidden absolute top-5 right-5" id="close-menu">
                        <box-icon name='x' color="white"></box-icon>
                    </div>
                    <ul class="lg:flex items-center gap-8 text-2xl lg:text-sm font-oswald lg:font-poppins font-bold lg:font-medium uppercase mt-10 lg:mt-0 text-white lg:text-black">
                        <li class="mb-3 relative tracking-widest lg:mb-0 active">
                            <a href="#home">Home</a>
                        </li>
                        <li class="mb-3 relative tracking-widest lg:mb-0">
                            <a href="#about">About</a>
                        </li>
                        <li class="mb-3 relative tracking-widest lg:mb-0">
                            <a href="#services">Services</a>
                        </li>
                        <li class="mb-3 relative tracking-widest lg:mb-0">
                            <a href="#projects">Projects</a>
                        </li>
                        <li class="mb-3 relative tracking-widest lg:mb-0">
                            <a href="#contacts">Contacts</a>
                        </li>
                        <li class="mb-3 relative tracking-widest lg:mb-0">
                            <a href="#testimonials">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <div class="lg:hidden" id="hamburger">
                    <box-icon name='menu-alt-left' size='lg' style="transition: ease 0.3s"></box-icon>
                </div>
            </div>
        </div>
    </div>
    <div id="home" class="w-100 h-100 bg-slate-50 shadow-t-lg rounded-t-[50px] mt-0 pt-10 px-3 relative">
        <div class="md:container-lg mx-auto lg:px-12 relative">
            <div class="grid grid-cols-12 md:gap-8 px-3 lg:px-12">
                <div class="col-span-12 md:col-span-1 h-100 md:flex items-center">
                    <ul class="flex md:block gap-4">
                        <li class="my-4">
                            <a href="#">
                                <box-icon name='facebook-circle' type='logo' ></box-icon>
                            </a>
                        </li>
                        <li class="my-4">
                            <a href="#">
                                <box-icon name='instagram' type='logo' ></box-icon>
                            </a>
                        </li>
                        <li class="my-4">
                            <a href="#">
                                <box-icon name='envelope' ></box-icon>
                            </a>
                        </li>
                        <li class="my-4">
                            <a href="#">
                                <box-icon name='linkedin' type='logo' ></box-icon>
                            </a>
                        </li>
                        <li class="my-4">
                            <a href="#">
                                <box-icon name='github' type='logo' ></box-icon>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-5 h-100 flex items-center">
                    <div>
                        <div class="text-4xl md:text-5xl font-oswald font-bold mb-1">
                            Carl Llemos
                        </div>
                        <div class="text-2xl md:text-3xl font-oswald font-bold mt-2">
                            I'm a <span class="home-typing text-sky-400"></span>
                        </div>
                        <div class="mt-3 text-justify font-poppins">
                            Mabuhay! I'm Carl Llemos, a fourth-year IT student at Arellano University. I have a strong passion for delving into technology-related stuffs, coding, and working towards my aspiration of becoming a software engineer.
                        </div>
                        <div class="mt-12">
                            <a href="#" class="w-100 h-100 px-6 py-3 border-2 border-slate-800 font-rubiks font-bold dark-slide-button">
                                Hire Me!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 relative flex justify-center py-14">
                    <img src="{{asset('images/profile.png')}}" alt="profile" class="w-100 relative">
                </div>
            </div>
            <div class="flex justify-center relative bottom-10">
                <div class="block text-center">
                    <box-icon name='mouse'></box-icon>
                    <div class="uppercase text-sm font-poppins font-semibold">
                        Scroll Down
                    </div>
                    <box-icon name='chevron-down' color='rgb(56 189 248 / 1)' animation='fade-down' ></box-icon>
                </div>
            </div>
            <div class="absolute -left-6 md:left-0 -bottom-4 md:-bottom-7">
                <img src="{{asset('images/cycling.gif')}}" alt="cycling" class="w-24 md:w-40">
            </div>
        </div>
    </div>
    <div id="about" class="py-10 text-white" style="background-color: #0f1729">
        <div class="md:container-lg mx-auto px-6 pb-5 overflow-hidden">
            <div class="grid grid-cols-12 mt-10 pb-24 md:pb-52">
                <div class="hidden col-span-2 lg:flex items-start relative" data-aos="fade-right" data-aos-delay="200">
                    <div class="uppercase text-9xl font-oswald font-bold -rotate-90 whitespace-nowrap absolute top-64 -left-72 tracking-widest" style="color: #3e4454">
                        About Me?
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <div class="grid grid-cols-12 md:gap-6" data-aos="fade-up">
                        <div class="col-span-12 md:col-span-4 lg:col-span-4 mt-4">
                            <div class="w-100 bg-slate-100 text-slate-950 py-4 text-center rounded-lg">
                                <div>
                                    <box-icon name='bulb' size='lg'></box-icon>
                                </div>
                                <div class="text-md uppercase font-rubiks font-bold">
                                    Experience
                                </div>
                                <div class="text-sm font-poppins font-semibold">
                                    4+ years
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-4 lg:col-span-4 mt-4">
                            <div class="w-100 bg-slate-100 text-slate-950 py-4 text-center rounded-lg">
                                <div>
                                    <box-icon name='briefcase' size='lg'></box-icon>
                                </div>
                                <div class="text-md uppercase font-rubiks font-bold">
                                    Commissions
                                </div>
                                <div class="text-sm font-poppins font-semibold">
                                    18+ freelance projects
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-4 lg:col-span-4 mt-4">
                            <div class="w-100 bg-slate-100 text-slate-950 py-4 text-center rounded-lg">
                                <div>
                                    <box-icon name='code' size='lg'></box-icon>
                                </div>
                                <div class="text-md uppercase font-rubiks font-bold">
                                    Projects
                                </div>
                                <div class="text-sm font-poppins font-semibold">
                                    25+ all projects
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm font-poppins text-justify font-medium mt-5" data-aos="fade-up">
                        I am a self-taught web developer who dedicates my entire day to learning and working on projects, constantly expanding my knowledge in the field. I have expertise in both front-end and back-end development. Besides coding, I enjoy cycling and watching movies in my free time. My journey in programming began during grade 11, fueled by my natural curiosity, which has since become a concrete goal and a passionate interest in the world of programming.
                    </div>
                    <div class="mt-8" data-aos="fade-up">
                        <button class="px-4 py-3 border-2 border-sky-400 uppercase flex items-center gap-2 text-sm light-slide-button">
                            <box-icon name='download' size='sm' color='white'></box-icon>
                            <span class="pt-1 font-rubiks font-medium">
                                Download CV
                            </span>
                        </button>
                    </div>
                    <div class="w-100 h-[1px] bg-slate-200 my-5" data-aos="fade-up"></div>
                    <div id="certificates" class="uppercase font-bold font-poppins text-xl" data-aos="fade-up">
                        [~] My Certificates
                    </div>
                    <div class="grid grid-cols-12 mt-5 gap-4">
                        <div class="col-span-12 md:col-span-4 cursor-pointer" data-aos="fade-up">
                            <div class="w-100 h-[160px] overflow-hidden">
                                <img src="{{asset('images/certificates/lavalust.png')}}" alt="cert" class="w-100 object-cover">
                            </div>
                            <div class="text-xs uppercase my-2 font-semibold">Introduction to lavalust</div>
                        </div>
                        <div class="col-span-12 md:col-span-4 cursor-pointer" data-aos="fade-up">
                            <div class="w-100 h-[160px] overflow-hidden">
                                <img src="{{asset('images/certificates/intro_cybersec.jpg')}}" alt="cert" class="w-100 object-cover">
                            </div>
                            <div class="text-xs uppercase my-2 font-semibold">Introduction to cybersec</div>
                        </div>
                        <div class="col-span-12 md:col-span-4 cursor-pointer" data-aos="fade-up">
                            <div class="w-100 h-[160px] overflow-hidden">
                                <img src="{{asset('images/certificates/intro_cip.png')}}" alt="cert" class="w-100 object-cover">
                            </div>
                            <div class="text-xs uppercase my-2 font-semibold">Introduction to critical infrastructure (CIP)</div>
                        </div>
                        <div class="col-span-12 cursor-pointer" data-aos="fade-up">
                            <div class="w-100">
                                <img src="{{asset('images/certificates/icip.png')}}" alt="cert" class="w-[100%] h-[200px] object-cover">
                            </div>
                            <div class="text-xs uppercase my-2 font-semibold">See more certifications</div>
                        </div>
                    </div>
                    <div class="w-100 h-[1px] bg-slate-200 my-4" data-aos="fade-up"></div>
                    <div class="uppercase font-bold font-poppins text-xl mt-4" data-aos="fade-up">
                        [~] Technologies that I'm using
                    </div>
                    <div class="grid grid-cols-12 mt-5 gap-3">
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">HTML 5</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">CSS 3</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#7c4dff" d="M7.373,11.443C7.293,9.132,9.094,7,11.529,7h24.946c2.435,0,4.236,2.132,4.155,4.443	c-0.077,2.221,0.023,5.097,0.747,7.443c0.726,2.353,1.951,3.84,3.957,4.031v2.167c-2.006,0.191-3.23,1.678-3.957,4.031	c-0.724,2.345-0.824,5.222-0.747,7.443C40.71,38.868,38.909,41,36.475,41H11.529c-2.434,0-4.236-2.132-4.155-4.443	c0.077-2.221-0.023-5.097-0.747-7.443c-0.726-2.353-1.954-3.84-3.96-4.031v-2.167c2.006-0.191,3.233-1.678,3.96-4.031	C7.35,16.54,7.451,13.664,7.373,11.443z"></path><path fill="#fff" d="M27.073,23.464v-0.028c1.853-0.32,3.299-2.057,3.299-3.97c0-1.352-0.52-2.498-1.504-3.312	c-0.981-0.812-2.357-1.241-3.981-1.241H17.45V33.08h7.475c1.942,0,3.555-0.474,4.663-1.372c1.109-0.899,1.696-2.207,1.696-3.783	C31.283,25.544,29.593,23.756,27.073,23.464z M23.59,22.608h-3.181V17.29h3.784c2.076,0,3.219,0.911,3.219,2.565	C27.413,21.63,26.055,22.608,23.59,22.608z M20.409,24.834h3.759c2.716,0,4.092,0.981,4.092,2.916c0,1.932-1.357,2.953-3.925,2.953	h-3.926V24.834z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Bootstrap 5</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#00acc1" d="M24,9.604c-6.4,0-10.4,3.199-12,9.597c2.4-3.199,5.2-4.398,8.4-3.599 c1.826,0.456,3.131,1.781,4.576,3.247C27.328,21.236,30.051,24,36,24c6.4,0,10.4-3.199,12-9.598c-2.4,3.199-5.2,4.399-8.4,3.6 c-1.825-0.456-3.13-1.781-4.575-3.247C32.672,12.367,29.948,9.604,24,9.604L24,9.604z M12,24c-6.4,0-10.4,3.199-12,9.598 c2.4-3.199,5.2-4.399,8.4-3.599c1.825,0.457,3.13,1.781,4.575,3.246c2.353,2.388,5.077,5.152,11.025,5.152 c6.4,0,10.4-3.199,12-9.598c-2.4,3.199-5.2,4.399-8.4,3.599c-1.826-0.456-3.131-1.781-4.576-3.246C20.672,26.764,17.949,24,12,24 L12,24z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Tailwind Css</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="#000001" d="M29.538 32.947c.692 1.124 1.444 2.201 3.037 2.201 1.338 0 2.04-.665 2.04-1.585 0-1.101-.726-1.492-2.198-2.133l-.807-.344c-2.329-.988-3.878-2.226-3.878-4.841 0-2.41 1.845-4.244 4.728-4.244 2.053 0 3.528.711 4.592 2.573l-2.514 1.607c-.553-.988-1.151-1.377-2.078-1.377-.946 0-1.545.597-1.545 1.377 0 .964.6 1.354 1.985 1.951l.807.344C36.452 29.645 38 30.839 38 33.523 38 36.415 35.716 38 32.65 38c-2.999 0-4.702-1.505-5.65-3.368L29.538 32.947zM17.952 33.029c.506.906 1.275 1.603 2.381 1.603 1.058 0 1.667-.418 1.667-2.043V22h3.333v11.101c0 3.367-1.953 4.899-4.805 4.899-2.577 0-4.437-1.746-5.195-3.368L17.952 33.029z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Javascript</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="#7ad0f5"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>jquery</title> <rect width="24" height="24" fill="none"/> <path d="M22.88,10.41a5,5,0,0,1-6.43-7.66L17,2.37A5,5,0,0,0,23.34,10l-.46.44M21.1,14.5A7.5,7.5,0,0,1,11.46,3l.92-.64a7.5,7.5,0,0,0,9.53,11.36l-.81.78M20,19.38A10.5,10.5,0,1,1,6.47,3.29L7.58,2.5A10.49,10.49,0,0,0,21,18.43Z"/> </g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Jquery</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 -60.5 256 256" version="1.1" preserveAspectRatio="xMidYMid"><defs><radialGradient id="radialGradient-1" cx="0.8366" cy="-125.811" r="363.0565" gradientTransform="matrix(0.463 0 0 0.463 76.4644 81.9182)" gradientUnits="userSpaceOnUse"><stop offset="0" style="stop-color:#FFFFFF"/><stop offset="0.5" style="stop-color:#4C6B97"/><stop offset="1" style="stop-color:#231F20"/></radialGradient></defs><g><ellipse fill="url(#radialGradient-1)" cx="128" cy="67.3" rx="128" ry="67.3"/><ellipse fill="#6181B6" cx="128" cy="67.3" rx="123" ry="62.3"/><g><path fill="#FFFFFF" d="M152.9,87.5c0,0,6.1-31.4,6.1-31.4c1.4-7.1,0.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6c0.1-0.6,0-1.2-0.4-1.7c-0.4-0.5-0.9-0.7-1.5-0.7h-14.6c-1,0-1.8,0.7-2,1.6l-6.5,33.3c-0.6-3.8-2-7-4.4-9.6c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1,0-1.8,0.7-2,1.6L37,104.7c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7h14.7c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3c2.5-2.3,4.6-4.9,6.2-7.7l-2.6,13.5c-0.1,0.6,0,1.2,0.4,1.7s0.9,0.7,1.5,0.7h14.6c1,0,1.8-0.7,2-1.6l7.2-37h10c4.3,0,5.5,0.8,5.9,1.2c0.3,0.3,0.9,1.5,0.2,5.2l-5.8,29.9c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7H151C151.9,89.1,152.7,88.4,152.9,87.5z M85.3,61.5c-0.9,4.7-2.6,8.1-5.1,10c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C85.8,54.2,86.1,57.3,85.3,61.5z"/><path fill="#FFFFFF" d="M215.3,42.9c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1,0-1.8,0.7-2,1.6l-13.1,67.5c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7h14.7c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3c2.6-2.4,4.8-5.1,6.4-8c1.6-2.9,2.8-6.1,3.5-9.6C220.9,54.7,219.6,47.9,215.3,42.9z M200,61.5c-0.9,4.7-2.6,8.1-5.1,10c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C200.6,54.2,200.9,57.3,200,61.5z"/><path fill="#000004" d="M74.8,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3 h-8.9l5.5-28.2H74.8zM39,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5 c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7H52.1L39,105z"/><path fill="#000004" d="M113.3,19.6h14.6l-3.5,17.9h13c8.2,0,13.8,1.4,16.9,4.3c3.1,2.9,4,7.5,2.8,13.9L151,87.1h-14.8l5.8-29.9 c0.7-3.4,0.4-5.7-0.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5,38.7h-14.6L113.3,19.6z"/><path fill="#000004" d="M189.5,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3 h-8.9l5.5-28.2H189.5zM153.7,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5 c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7h-28.3L153.7,105z"/></g></g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Php</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#EE4323" width="80" height="80" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>codeigniter</title> <path d="M15.333 1.004c1.1 1.778-0.35 4.131-1.508 5.446-1.123 1.275-2.489 2.341-3.73 3.499-1.344 1.223-2.559 2.536-3.655 3.945l-0.052 0.070c-1.75 2.074-2.814 4.776-2.814 7.727 0 0.892 0.097 1.762 0.282 2.599l-0.015-0.080c1.123 3.498 4.043 6.111 7.646 6.775l0.061 0.009c-1.922-0.827-3.285-2.62-3.485-4.751l-0.002-0.023c0.13-2.236 1.336-4.165 3.103-5.29l0.027-0.016c-0.117 0.273-0.185 0.59-0.185 0.923 0 0.48 0.141 0.928 0.384 1.303l-0.006-0.009c0.381 0.518 0.988 0.85 1.673 0.85 1.143 0 2.070-0.927 2.070-2.070 0-0.654-0.303-1.237-0.777-1.616l-0.004-0.003c-1.079-0.86-1.765-2.174-1.765-3.648 0-0.202 0.013-0.401 0.038-0.596l-0.002 0.023c0.241-0.898 0.733-1.66 1.395-2.228l0.006-0.005c-0.512 1.347 0.943 2.674 1.903 3.337 1.937 1.142 3.575 2.251 5.142 3.449l-0.123-0.090c1.567 1.206 2.567 3.083 2.567 5.194 0 0.123-0.003 0.244-0.010 0.365l0.001-0.017c-0.42 2.337-2.083 4.202-4.267 4.906l-0.045 0.012c4.526-1 9.204-4.511 9.297-9.531 0.116-3.789-2.378-7.144-6.446-9.227 0.081 0.15 0.129 0.329 0.129 0.518 0 0.238-0.075 0.459-0.204 0.64l0.002-0.003c-0.397 0.616-1.079 1.018-1.856 1.018-0.676 0-1.281-0.305-1.684-0.785l-0.003-0.003c-1.506-1.934 0.031-4.019 0.246-6.067 0.002-0.068 0.003-0.147 0.003-0.227 0-2.616-1.312-4.926-3.314-6.307l-0.026-0.017z"/> </g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">CodeIgniter</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="-4 0 264 264" version="1.1" preserveAspectRatio="xMidYMid"><g><path d="M255.855641,59.619717 C255.950565,59.9710596 256,60.3333149 256,60.6972536 L256,117.265345 C256,118.743206 255.209409,120.108149 253.927418,120.843385 L206.448786,148.178786 L206.448786,202.359798 C206.448786,203.834322 205.665123,205.195421 204.386515,205.937838 L105.27893,262.990563 C105.05208,263.119455 104.804608,263.201946 104.557135,263.289593 C104.464333,263.320527 104.376687,263.377239 104.278729,263.403017 C103.585929,263.58546 102.857701,263.58546 102.164901,263.403017 C102.051476,263.372083 101.948363,263.310215 101.840093,263.26897 C101.613244,263.186479 101.376082,263.1143 101.159544,262.990563 L2.07258227,205.937838 C0.7913718,205.201819 0,203.837372 0,202.359798 L0,32.6555248 C0,32.2843161 0.0515567729,31.9234187 0.144358964,31.5728326 C0.175293028,31.454252 0.24747251,31.3459828 0.288717928,31.2274022 C0.366053087,31.0108638 0.438232569,30.7891697 0.55165747,30.5880982 C0.628992629,30.4540506 0.742417529,30.3457814 0.83521972,30.2220451 C0.953800298,30.0570635 1.06206952,29.8869261 1.20127281,29.7425672 C1.31985339,29.6239866 1.4745237,29.5363401 1.60857131,29.4332265 C1.75808595,29.3094903 1.89213356,29.1754427 2.06227091,29.0774848 L2.06742659,29.0774848 L51.6134853,0.551122364 C52.8901903,-0.183535768 54.4613221,-0.183535768 55.7380271,0.551122364 L105.284086,29.0774848 L105.294397,29.0774848 C105.459379,29.1805983 105.598582,29.3094903 105.748097,29.4280708 C105.882144,29.5311844 106.031659,29.6239866 106.15024,29.7374115 C106.294599,29.8869261 106.397712,30.0570635 106.521448,30.2220451 C106.609095,30.3457814 106.727676,30.4540506 106.799855,30.5880982 C106.918436,30.7943253 106.985459,31.0108638 107.06795,31.2274022 C107.109196,31.3459828 107.181375,31.454252 107.212309,31.5779883 C107.307234,31.9293308 107.355765,32.2915861 107.356668,32.6555248 L107.356668,138.651094 L148.643332,114.878266 L148.643332,60.6920979 C148.643332,60.3312005 148.694889,59.9651474 148.787691,59.619717 C148.823781,59.4959808 148.890804,59.3877116 148.93205,59.269131 C149.014541,59.0525925 149.08672,58.8308984 149.200145,58.629827 C149.27748,58.4957794 149.390905,58.3875102 149.478552,58.2637739 C149.602288,58.0987922 149.705401,57.9286549 149.84976,57.7842959 C149.968341,57.6657153 150.117856,57.5780688 150.251903,57.4749553 C150.406573,57.351219 150.540621,57.2171714 150.705603,57.1192136 L150.710758,57.1192136 L200.261973,28.5928511 C201.538395,27.8571345 203.110093,27.8571345 204.386515,28.5928511 L253.932573,57.1192136 C254.107866,57.2223271 254.241914,57.351219 254.396584,57.4697996 C254.525476,57.5729132 254.674991,57.6657153 254.793572,57.7791402 C254.93793,57.9286549 255.041044,58.0987922 255.16478,58.2637739 C255.257582,58.3875102 255.371007,58.4957794 255.443187,58.629827 C255.561767,58.8308984 255.628791,59.0525925 255.711282,59.269131 C255.757683,59.3877116 255.824707,59.4959808 255.855641,59.619717 Z M247.740605,114.878266 L247.740605,67.8378666 L230.402062,77.8192579 L206.448786,91.6106946 L206.448786,138.651094 L247.745761,114.878266 L247.740605,114.878266 Z M198.194546,199.97272 L198.194546,152.901386 L174.633101,166.357704 L107.351512,204.757188 L107.351512,252.27191 L198.194546,199.97272 Z M8.25939501,39.7961379 L8.25939501,199.97272 L99.0921175,252.266755 L99.0921175,204.762344 L51.6392637,177.906421 L51.6237967,177.89611 L51.603174,177.885798 C51.443348,177.792996 51.3093004,177.658949 51.1597857,177.545524 C51.0308938,177.44241 50.8813791,177.359919 50.7679542,177.246494 L50.7576429,177.231027 C50.6235953,177.102135 50.5307931,176.942309 50.4173682,176.79795 C50.3142546,176.658747 50.1905184,176.540167 50.1080276,176.395808 L50.1028719,176.380341 C50.0100697,176.22567 49.9533572,176.040066 49.8863334,175.864773 C49.8193096,175.710103 49.7316631,175.565744 49.6904177,175.400762 L49.6904177,175.395606 C49.6388609,175.19969 49.6285496,174.993463 49.6079269,174.792392 C49.5873041,174.637722 49.5460587,174.483051 49.5460587,174.328381 L49.5460587,174.31807 L49.5460587,63.5689658 L25.5979377,49.7723734 L8.25939501,39.8012935 L8.25939501,39.7961379 Z M53.6809119,8.89300821 L12.3994039,32.6555248 L53.6706006,56.4180414 L94.9469529,32.6503692 L53.6706006,8.89300821 L53.6809119,8.89300821 Z M75.1491521,157.19091 L99.0972731,143.404629 L99.0972731,39.7961379 L81.7587304,49.7775291 L57.8054537,63.5689658 L57.8054537,167.177457 L75.1491521,157.19091 Z M202.324244,36.934737 L161.047891,60.6972536 L202.324244,84.4597702 L243.59544,60.6920979 L202.324244,36.934737 Z M198.194546,91.6106946 L174.24127,77.8192579 L156.902727,67.8378666 L156.902727,114.878266 L180.850848,128.664547 L198.194546,138.651094 L198.194546,91.6106946 Z M103.216659,197.616575 L163.759778,163.052915 L194.023603,145.781396 L152.778185,122.034346 L105.289242,149.374903 L62.0073307,174.292291 L103.216659,197.616575 Z" fill="#FF2D20"></path></g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Laravel</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 9.252 4.626"><g transform="matrix(.037376 0 0 .037376 1.069994 -1.319339)" fill-rule="evenodd"><path d="M8.504 128.215h5.8v-22.977l9.058 20.033c1.026 2.408 2.5 3.3 5.354 3.3s4.24-.893 5.3-3.3l9.013-20.033v22.977h5.845v-22.977c0-2.23-.893-3.303-2.767-3.883-4.417-1.338-7.362-.178-8.7 2.81l-8.878 19.81-8.567-19.81c-1.294-2.988-4.284-4.148-8.745-2.81-1.83.58-2.722 1.652-2.722 3.883l-.001 22.977zm45.198-18.694h5.845v12.627c-.044.713.223 2.32 3.4 2.363 1.65.045 12.582 0 12.67 0v-15.08h5.845v20.658c0 5.086-6.3 6.2-9.236 6.246h-18.38v-3.88h18.427c3.748-.402 3.302-2.275 3.302-2.9v-1.518h-12.36c-5.756-.045-9.46-2.588-9.503-5.488v-13.03zm125.374-14.635c-3.568-.09-6.336.268-8.656 1.25-.668.27-1.74.27-1.828 1.116.357.355.4.936.713 1.428.535.893 1.473 2.096 2.32 2.72.938.715 1.875 1.428 2.855 2.053 1.74 1.07 3.703 1.695 5.398 2.766.982.625 1.963 1.428 2.945 2.098.5.357.803.938 1.428 1.16v-.135c-.312-.4-.402-.98-.713-1.428-.447-.445-.893-.848-1.34-1.293-1.293-1.74-2.9-3.258-4.64-4.506-1.428-.982-4.55-2.32-5.13-3.97l-.088-.09c.98-.09 2.14-.447 3.078-.715 1.518-.4 2.9-.312 4.46-.713.715-.18 1.428-.402 2.143-.625v-.4c-.803-.803-1.383-1.874-2.23-2.632-2.275-1.963-4.775-3.882-7.363-5.488-1.383-.892-3.168-1.473-4.64-2.23-.537-.268-1.428-.402-1.74-.848-.805-.98-1.25-2.275-1.83-3.436-1.293-2.454-2.543-5.175-3.658-7.763-.803-1.74-1.295-3.48-2.275-5.086-4.596-7.585-9.594-12.18-17.268-16.687-1.65-.937-3.613-1.34-5.7-1.83l-3.346-.18c-.715-.312-1.428-1.16-2.053-1.562-2.543-1.606-9.102-5.086-10.977-.49-1.205 2.9 1.785 5.755 2.8 7.228.76 1.026 1.74 2.186 2.277 3.346.3.758.4 1.562.713 2.365.713 1.963 1.383 4.15 2.32 5.98.5.937 1.025 1.92 1.65 2.767.357.49.982.714 1.115 1.517-.625.893-.668 2.23-1.025 3.347-1.607 5.042-.982 11.288 1.293 14.99.715 1.115 2.4 3.57 4.686 2.632 2.008-.803 1.56-3.346 2.14-5.577.135-.535.045-.892.312-1.25v.09l1.83 3.703c1.383 2.186 3.793 4.462 5.8 5.98 1.07.803 1.918 2.187 3.256 2.677v-.135h-.088c-.268-.4-.67-.58-1.027-.892-.803-.803-1.695-1.785-2.32-2.677-1.873-2.498-3.523-5.265-4.996-8.12-.715-1.383-1.34-2.9-1.918-4.283-.27-.536-.27-1.34-.715-1.606-.67.98-1.65 1.83-2.143 3.034-.848 1.918-.936 4.283-1.248 6.737-.18.045-.1 0-.18.09-1.426-.356-1.918-1.83-2.453-3.078-1.338-3.168-1.562-8.254-.402-11.913.312-.937 1.652-3.882 1.117-4.774-.27-.848-1.16-1.338-1.652-2.008-.58-.848-1.203-1.918-1.605-2.855-1.07-2.5-1.605-5.265-2.766-7.764-.537-1.16-1.473-2.365-2.232-3.435-.848-1.205-1.783-2.053-2.453-3.48-.223-.49-.535-1.294-.178-1.83.088-.357.268-.49.623-.58.58-.49 2.232.134 2.812.4 1.65.67 3.033 1.294 4.416 2.23.625.446 1.295 1.294 2.098 1.518h.938c1.428.312 3.033.09 4.37.49 2.365.76 4.506 1.874 6.426 3.08 5.844 3.703 10.664 8.968 13.92 15.26.535 1.026.758 1.963 1.25 3.034.938 2.187 2.098 4.417 3.033 6.56.938 2.097 1.83 4.24 3.168 5.98.67.937 3.346 1.427 4.55 1.918.893.4 2.275.76 3.08 1.25 1.516.937 3.033 2.008 4.46 3.034.713.534 2.945 1.65 3.078 2.54zm-45.5-38.772a7.09 7.09 0 0 0-1.828.223v.09h.088c.357.714.982 1.205 1.428 1.83l1.027 2.142.088-.09c.625-.446.938-1.16.938-2.23-.268-.312-.312-.625-.535-.937-.268-.446-.848-.67-1.206-1.026z" fill="#00678c"/><path d="M85.916 128.215h16.776c1.963 0 3.838-.4 5.354-1.115 2.543-1.16 3.748-2.72 3.748-4.773v-4.283c0-1.65-1.383-3.213-4.148-4.283-1.428-.535-3.213-.848-4.953-.848h-7.05c-2.365 0-3.48-.715-3.793-2.275-.044-.178-.044-.357-.044-.535v-2.633c0-.135 0-.312.044-.49.312-1.205.937-1.518 3-1.74h17.177v-3.883h-16.33c-2.365 0-3.614.135-4.73.492-3.436 1.07-4.953 2.766-4.953 5.754v3.393c0 2.63 2.945 4.863 7.942 5.398.535.045 1.115.045 1.695.045h6.024c.223 0 .445 0 .623.045 1.83.178 2.633.49 3.168 1.158.357.357.447.67.447 1.072v3.39c0 .4-.268.938-.803 1.383s-1.385.758-2.5.803c-.223 0-.355.045-.58.045H85.916zm62.195-6.736c0 3.97 3 6.2 8.97 6.648.58.045 1.115.088 1.695.088h15.17v-3.88h-15.303c-3.393 0-4.686-.848-4.686-2.9v-20.078H148.1v20.123zm-32.615.177v-13.83c0-3.525 2.498-5.668 7.363-6.336.535-.045 1.07-.09 1.56-.09h11.064c.58 0 1.072.045 1.652.09 4.863.668 7.316 2.81 7.316 6.336v13.83c0 2.855-1.025 4.373-3.436 5.4l5.71 5.174h-6.736l-4.64-4.193-4.686.268h-6.246a13.66 13.66 0 0 1-3.391-.445c-3.7-1.028-5.53-2.99-5.53-6.204zm6.29-.31c0 .178.1.355.135.58.312 1.605 1.828 2.498 4.148 2.498h5.266l-4.818-4.373h6.736l4.238 3.838c.805-.447 1.295-1.072 1.473-1.875.045-.178.045-.4.045-.58v-13.252c0-.178 0-.355-.045-.535-.312-1.516-1.828-2.363-4.104-2.363h-8.79c-2.588 0-4.283 1.115-4.283 2.898z" fill="#ce8b2c"/></g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Mysql</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 20 20" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>github [#142]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#ffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"> </path> </g> </g> </g> </g></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Github</div>
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 flex justify-center" data-aos="fade-up">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48"><path fill="#29b6f6" d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z"></path><path fill="#0277bd" d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z"></path><path fill="#0288d1" d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z"></path></svg>
                                <div class="text-xs text-center uppercase my-2 font-bold">Vscode</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden col-span-12 md:col-span-2 lg:flex items-start relative" data-aos="fade-left" data-aos-delay="300">
                    <div class="uppercase text-9xl font-oswald font-bold rotate-90 whitespace-nowrap absolute top-64 -right-72 tracking-widest" style="color: #3e4454">
                        Who am I?
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="md:container-lg mx-auto px-6 md:px-12 py-10 relative -top-40">
        <div class="text-9xl md:text-8xl font-oswald font-bold uppercase text-dark tracking-widest absolute -top-8 left-28 z-10 hidden md:block whitespace-nowrap" style="color: #3e4454" data-aos="fade-up">My Offers</div>
        <div class="text-3xl md:text-5xl font-oswald font-bold uppercase text-dark bg-white pb-10 pt-4 md:py-10 px-12 h-100 inline rounded-t-lg relative top-16 z-20" data-aos="fade-up">My Services</div>
        <div class="grid grid-cols-12 items-center md:absolute md:top-28 right-0 z-30">
            <div class="col-span-12 md:col-span-6 relative top-20 md:-top-2 lg:top-12 flex justify-center z-30" style="filter: drop-shadow(-10px -2px 6px rgba(0,0,0,0.6))">
                <div class="services-content-images active bounce">
                    <img src="{{asset('images/services/web-design.png')}}" alt="web-design" class="w-100">
                </div>
                <div class="services-content-images bounce">
                    <img src="{{asset('images/services/front-end.png')}}" alt="web-design" class="w-100">
                </div>
                <div class="services-content-images bounce">
                    <img src="{{asset('images/services/back-end.png')}}" alt="web-design" class="w-100">
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 relative top-28 md:-top-8" data-aos="fade-up">
                <div class="w-100 bg--500 p-8 rounded-3xl md:rounded-none md:rounded-tl-3xl md:rounded-bl-3xl shadow-lg text-white bg-sky-950">
                    <div class="services-content active overflow-hidden">
                        <div class="text-3xl md:text-5xl font-oswald font-bold whitespace-nowrap"><span class="service-1"></span></div>
                        <div class="text-2xl md:text-3xl font-oswald mt-5">
                            Revamp your online presence with our expert web design services. We specialize in crafting custom, responsive websites that captivate users and improve search rankings. Whether you need a personal blog, portfolio, or business website, we've got your web needs covered. Let's bring your vision to life.
                        </div>
                    </div>
                    <div class="services-content overflow-hidden">
                        <div class="text-3xl md:text-5xl font-oswald font-bold whitespace-nowrap"><span class="service-2"></span></div>
                        <div class="text-2xl md:text-3xl font-oswald mt-5">
                            We create responsive interfaces with HTML, CSS, JavaScript, jQuery, Bootstrap, and more, ensuring cross-browser compatibility and mobile-friendliness. From design to performance, we prioritize user satisfaction. Whether a website or app, we bring your vision to life with a tech-driven approach, making your online presence shine.
                        </div>
                    </div>
                    <div class="services-content overflow-hidden">
                        <div class="text-3xl md:text-5xl font-oswald font-bold whitespace-nowrap"><span class="service-3"></span></div>
                        <div class="text-2xl md:text-3xl font-oswald mt-5">
                            Our back-end development expertise spans PHP, CodeIgniter, Laravel, and MySQL. We ensure secure, efficient, and scalable server-side functionality, covering everything from database management to API integration. Trust us to handle the technical intricacies while you focus on delivering a superior user experience.
                        </div>
                    </div>
                    <div class="flex justify-end gap-2">
                        <div class="w-[10px] h-[10px] flex justify-center items-center border text-xs mt-8 rounded-full services-indicator bg-sky-400"></div>
                        <div class="w-[10px] h-[10px] flex justify-center items-center border text-xs mt-8 rounded-full services-indicator"></div>
                        <div class="w-[10px] h-[10px] flex justify-center items-center border text-xs mt-8 rounded-full services-indicator"></div>
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-8">
                    <button class="w-100 py-2 px-8 border-2 border-slate-900 uppercase text-xs font-bold" id="prev-btn">prev</button>
                    <button class="w-100 py-2 px-8 border-2 border-slate-900 uppercase text-xs font-bold" id="next-btn">next</button>
                </div>
            </div>
        </div>
    </div>
    <div id="projects" class="w-100 relative md:top-[70vh]">
        <div class="h-[500px] bg-no-repeat bg-cover bg-center bg-fixed flex justify-center items-center text-white"
        style="background-image: url('{{ asset('images/work-bg.jpg') }}')">
        <div class="mx-auto w-[90%] md:w-[65%] text-center font-bold" data-aos="fade-up">
            <div class="text-6xl md:text-8xl font-oswald font-bold flex justify-center items-center uppercase">
                Projects
            </div>
            <div class="mt-5 block font-rubiks text-md md:text-xl">
                These exemplify my portfolio, spanning commissioned assignments, personal initiatives, capstone projects, pet projects, and various endeavors I've undertaken throughout my professional journey.
            </div>
        </div>
    </div>
    <div class="md:container-lg mx-auto">
        <div class="flex justify-center" data-aos="fade-up">
            <div class="w-[90%] md:w-[90%] min-h-[400px] bg-white rounded-2xl border shadow-lg relative -top-28 px-6 pb-10">
                <ul class="py-4 mb-4 flex justify-center list-none flex-row flex-wrap border-b-0 ps-0" id="tabs-tab3" role="tablist" data-twe-nav-ref>
                    <li role="presentation">
                        <a
                            href="#tabs-home3"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-extrabold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                            id="tabs-home-tab3"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-home3"
                            data-twe-nav-active
                            role="tab"
                            aria-controls="tabs-home3"
                            aria-selected="true"
                        >
                            Latest
                        </a>
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-profile3"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-extrabold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                            id="tabs-profile-tab3"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-profile3"
                            role="tab"
                            aria-controls="tabs-profile3"
                            aria-selected="false"
                        >
                            More
                        </a>
                    </li>
                </ul>
                <div>
                    <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="tabs-home3" role="tabpanel" data-twe-tab-active aria-labelledby="tabs-home-tab3">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 md:col-span-4">
                                <div class="bg-white shadow-md border rounded">
                                    <div class="w-100 h-[180px] overflow-hidden rounded-lg">
                                        <img src="{{asset('images/projects/cashier-pos/1.png')}}" alt="cashier-pos" class="object-cover">
                                    </div>
                                </div>
                                <div class="text-xl mt-3 font-rubiks font-black uppercase line-clamp-1">
                                    Cashier POS
                                </div>
                                <div class="text-[10px] font-rubiks font-bold uppercase text-slate-600">
                                    January 10, 2022
                                </div>
                                <hr class="my-2">
                            </div>
                            <div class="col-span-12 md:col-span-4">
                                <div class="bg-white shadow-md border rounded">
                                    <div class="w-100 h-[180px] overflow-hidden rounded-lg">
                                        <img src="{{asset('images/projects/covid-tracker/1.jpg')}}" alt="cashier-pos" class="object-cover">
                                    </div>
                                </div>
                                <div class="text-xl mt-3 font-rubiks font-black uppercase line-clamp-1">
                                    Covid-19 Tracker
                                </div>
                                <div class="text-[10px] font-rubiks font-bold uppercase text-slate-600">
                                    January 10, 2022
                                </div>
                                <hr class="my-2">
                            </div>
                        </div>
                    </div>
                    <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
                        no records
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contacts" class="w-100 relative">
        <div class="h-[250px] lg:h-[400px] bg-no-repeat bg-cover bg-center bg-fixed flex justify-start items-center text-white"
        style="background-image: url('{{ asset('images/contact-bg.jpg') }}')">
        <div class="w-100 container md:container-lg mx-auto px-6 lg:px-32" data-aos="fade-up">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-6">
                    <div class="text-4xl md:text-5xl uppercase font-poppins font-bold">Contact Me!</div>
                    <div class="text-1xl md:text-3xl font-poppins font-bold">Looking for <span class="contact-typing text-sky-400"></span></div>
                    <ul class="flex gap-4 text-xs mt-6">
                        <li>
                            <a href="#">
                                <box-icon type='logo' name='facebook-square' color='white' size='md'></box-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <box-icon name='instagram' type='logo' color='white' size='md'></box-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <box-icon type='logo' name='linkedin-square'color='white' size='md'></box-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <box-icon name='github' type='logo' color='white' size='md'></box-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 md:container-lg mx-auto px-6 md:px-32 relative py-12">
        <div class="grid grid-cols-12 md:gap-16 justify-center">
            <div class="col-span-12 md:col-span-6">
                <div class="text-5xl font-oswald font-bold uppercase lg:whitespace-nowrap">
                    Project Stages
                </div>
                <div class="mt-10 w-100">
                    <ol class="border-s-[4px] border-sky-400 dark:border-neutral-500">
                        <li data-aos="fade-up">
                           <div class="flex-start flex items-center gap-2">
                              <div
                                 class="-ms-[14px] me-3 h-[25px] w-[25px] rounded-full bg-white border-4 border-sky-400 dark:bg-neutral-500"></div>
                                 <div class="mb-1.5 text-2xl uppercase font-oswald font-bold text-sky-500">1. Discussions</div>
                           </div>
                           <div class="mb-6 ms-8">
                                <p class="mb-3 text-neutral-600 dark:text-neutral-300 font-oswald font-medium">
                                    Engage in a collaborative exchange of ideas with the client to define project goals, website content, and data requirements, ensuring a clear understanding of desired outcomes.
                                </p>
                           </div>
                        </li>
                        <li data-aos="fade-up">
                            <div class="flex-start flex items-center gap-2">
                               <div
                                  class="-ms-[14px] me-3 h-[25px] w-[25px] rounded-full bg-white border-4 border-sky-400 dark:bg-neutral-500"></div>
                                  <div class="mb-1.5 text-2xl uppercase font-oswald font-bold text-sky-500">2. Proposal</div>
                            </div>
                            <div class="mb-6 ms-8">
                                 <p class="mb-3 text-neutral-600 dark:text-neutral-300 font-oswald font-medium">
                                    Present a comprehensive plan, including concept mockups and finalized project details, providing the client with a well-defined roadmap for their project.
                                </p>
                            </div>
                         </li>
                         <li data-aos="fade-up">
                            <div class="flex-start flex items-center gap-2">
                               <div
                                  class="-ms-[14px] me-3 h-[25px] w-[25px] rounded-full bg-white border-4 border-sky-400 dark:bg-neutral-500"></div>
                                  <div class="mb-1.5 text-2xl uppercase font-oswald font-bold text-sky-500">3. Development</div>
                            </div>
                            <div class="mb-6 ms-8">
                                 <p class="mb-3 text-neutral-600 dark:text-neutral-300 font-oswald font-medium">
                                    Embark on the journey of bringing concepts to life by translating mockup designs into a fully functional website, meticulously refining each element with great attention to detail.
                                </p>
                            </div>
                         </li>
                         <li data-aos="fade-up">
                            <div class="flex-start flex items-center gap-2">
                               <div
                                  class="-ms-[14px] me-3 h-[25px] w-[25px] rounded-full bg-white border-4 border-sky-400 dark:bg-neutral-500"></div>
                                  <div class="mb-1.5 text-2xl uppercase font-oswald font-bold text-sky-500">4. Deployment</div>
                            </div>
                            <div class="mb-6 ms-8">
                                 <p class="mb-3 text-neutral-600 dark:text-neutral-300 font-oswald font-medium">
                                    Offer seamless deployment options, enabling clients to host their website on various platforms like GoDaddy or Infinity Free, ensuring a smooth transition from development to the live online presence.
                                </p>
                            </div>
                         </li>
                     </ol>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 relative top-8">
                <div class="w-100 bg-white shadow-lg border rounded-xl relative md:-top-48"  data-aos="fade-up">
                    <div class="flex items-center gap-4 p-5 border-b-2">
                        <div>
                            <img src="{{asset('images/logo-dark.png')}}" alt="logo" class="w-32">
                        </div>
                        <div class="text-sm font-oswald font-medium">
                            Share your thoughts with me, and let's work together to turn them into reality. I'll be ready to respond whenever I receive your message.
                        </div>
                    </div>
                    <div class="p-4 w-[100%]">
                        <div class="mb-3">
                            <label for="name" class="text-xs font-rubiks font-medium text-slate-800">What should I call you?</label>
                            <input type="text" name="name" id="name" class="p-3 border w-full mt-1 focus:border-sky-400 hover:border-sky-400 outline-none" placeholder="Carl Llemos" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="text-xs font-rubiks font-medium text-slate-800">What's your email address?</label>
                            <input type="email" name="name" id="name" class="p-3 border w-full mt-1 focus:border-sky-400 hover:border-sky-400 outline-none" placeholder="hello@iamcarlllemos.live" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="text-xs font-rubiks font-medium text-slate-800">What's your email address?</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="p-3 border w-full mt-1 focus:border-sky-400 hover:border-sky-400 outline-none resize-none" placeholder="Write here..."></textarea autocomplete="off">
                        </div>
                        <div class="flex justify-end">
                            <button class="px-6 py-2 border text-sm uppercase font-rubiks font-bold bg-slate-900 text-white">Send</button>
                        </div>
                    </div>
                </div>
                <div id="testimonials" class="testimonial-content w-100 bg-white h-100 shadow-lg border rounded-xl relative top-10 md:-top-40 p-8" data-aos="fade-up">
                    <div class="testimonial-carousel active">
                        <div class="pb-8">
                            <div class="relative font-rubiks font-medium text-sm
                                before:content-['❝'] before:text-lg before:pl-[-0.5rem] before:text-slate-500
                                after:content-['❞'] after:text-lg after:pl-[-0.5rem] after:text-slate-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur temporibus explicabo ex reprehenderit repudiandae labore aliquid nemo doloribus iste porro dicta quod, doloremque voluptatum soluta, laborum, sint magnam culpa esse!
                            </div>
                            <div class="flex justify-end mt-4 font-rubiks text-xs uppercase font-bold underline">
                                - Carl Llemos
                            </div>
                        </div>
                        <div class="absolute -left-5 md:-left-10 -bottom-14">
                            <div class="relative">
                                <img src="{{asset('images/testimonials/photo.png')}}" alt="testimonial" class="w-32 rounded-full bg-white shadow-lg">
                                <div class="absolute -top-5 left-6 -rotate-12">
                                    <img src="{{asset('images/pin.png')}}" alt="pin" class="w-10 transform scale-x-[-1]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel">
                        <div class="pb-8">
                            <div class="relative font-rubiks font-medium text-sm
                                before:content-['❝'] before:text-lg before:pl-[-0.5rem] before:text-slate-500
                                after:content-['❞'] after:text-lg after:pl-[-0.5rem] after:text-slate-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur temporibus explicabo ex reprehenderit repudiandae labore aliquid nemo doloribus iste porro dicta quod, doloremque voluptatum soluta, laborum, sint magnam culpa esse!
                            </div>
                            <div class="flex justify-end mt-4 font-rubiks text-xs uppercase font-bold underline">
                                - Janna Rinon
                            </div>
                        </div>
                        <div class="absolute -left-5 md:-left-10 -bottom-14">
                            <div class="relative">
                                <img src="{{asset('images/testimonials/photo.png')}}" alt="testimonial" class="w-32 rounded-full bg-white shadow-lg">
                                <div class="absolute -top-5 left-6 -rotate-12">
                                    <img src="{{asset('images/pin.png')}}" alt="pin" class="w-10 transform scale-x-[-1]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4">
                        <button id="prev-btn" class="bg-slate-900 w-10 h-10 rounded-full flex items-center justify-center">
                            <box-icon type='solid' name='chevron-left' color='white'></box-icon>
                        </button>
                    </div>
                    <div class="absolute -bottom-4 -right-4">
                        <button id="next-btn" class="bg-sky-400 w-10 h-10 rounded-full flex items-center justify-center">
                            <box-icon type='solid' name='chevron-right' color='white'></box-icon>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="relative top-36 md:top-0">
    <div class="px-6 lg:px-32 w-100 h-100 bg-slate-800 py-10">
        <div class="grid grid-cols-12 md:gap-12 text-white">
            <div class="col-span-12 md:col-span-3 md:flex justify-center w-100 mb-6">
                <img src="{{asset('images/logo-light.png')}}" alt="logo" class="w-24 h-24">
            </div>
            <div class="col-span-12 md:col-span-3 mb-6">
                <ul class="list-none font-oswald uppercase tracking-widest">
                    <li class="text-3xl mb-2 font-bold">Services</li>
                    <hr class="mb-2">
                    <li class="text-1xl font-medium">Website Design</li>
                    <li class="text-1xl font-medium">Website Development</li>
                    <li class="text-1xl font-medium">Front End Development</li>
                    <li class="text-1xl font-medium">Back End Development</li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3 mb-6">
                <ul class="list-none font-oswald uppercase tracking-widest">
                    <li class="text-3xl mb-2 font-bold">Links</li>
                    <hr class="mb-2">
                    <li class="text-1xl font-medium">
                        <a href="#home">
                            Home
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#about">
                            About
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#certificates">
                            Certificates
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#projects">
                            Projects
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#contacts">
                            Contacts
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#testimonails">
                            Testimonials
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3 mb-6">
                <ul class="list-none font-oswald uppercase tracking-widest">
                    <li class="text-3xl mb-2 font-bold">Socials</li>
                    <hr class="mb-2">
                    <li class="text-1xl font-medium">
                        <a href="#">
                            Facebook
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#">
                            Instagram
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#">
                            X
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#">
                            LinkedIn
                        </a>
                    </li>
                    <li class="text-1xl font-medium">
                        <a href="#">
                            Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-100 bg-white flex justify-center py-3 text-xs uppercase font-bold">
        &copy; 2023 | Made with &hearts; by <span class="text-sky-400 ms-1">Carl Llemos</span>
    </div>
</div>

<div class="fixed bottom-10 md:bottom-14 left-4 md:left-12 w-[70px] h-[80px] md:w-[110px] md:h-[120px] bg-slate-100 flex justify-center items-center z-40 cursor-pointer hexagon" id="scroll-up">
    <box-icon type='solid' name='chevron-up' color='black' size="80px"></box-icon>
</div>

</body>
</html>
