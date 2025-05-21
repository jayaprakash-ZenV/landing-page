<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venkys.io</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-[#006769] text-white">

    {{-- Navigation --}}
    <nav class="flex justify-between items-center px-10 py-3 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)]">
        <div class="text-2xl font-bold">
            <img 
                src="{{ asset('images/venkys-logo.png') }}" 
                alt="venkys.io" 
                class="w-28"
            >
        </div>
        <ul class="flex gap-6 text-sm font-medium text-black">
            <li><a href="#">Home</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Mentors</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Books</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
        <button class="bg-black text-[#E6FF94] px-4 py-2 rounded-full text-sm font-semibold">Log In</button>
    </nav>

    {{-- Hero Section --}}
    <section class="flex flex-col lg:flex-row items-center justify-between gap-10 px-10 lg:px-24 py-16">
        {{-- Left Text --}}
        <div class="lg:w-1/2 text-white">
            <p class="text-sm mb-2">Your Online Learning Partner</p>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Learn, Grow, and<br>
                Achieve with <span class="text-[#E6FF94]">Expert Guidance</span>
            </h1>
            <p class="mt-4 text-sm text-white/80">
                Access high-quality courses anytime, anywhere, and take control of your learning journey with ease.
            </p>
            <button class="mt-6 px-6 py-3 bg-[#40A578] text-white font-semibold rounded-full hover:bg-[#9DDE8B]">
                Get Started Now
            </button>

            {{-- Student Review --}}
            <div class="mt-6 flex items-center gap-3">
                <div class="flex -space-x-2">
                    <img src="{{ asset('images/user1.avif') }}" class="w-8 h-8 rounded-full border-2 border-white" />
                    <img src="{{ asset('images/user2.jpg') }}" class="w-8 h-8 rounded-full border-2 border-white" />
                </div>
                <div>
                    <div class="flex items-center gap-1">
                        <span class="text-lg font-semibold">4.8</span>
                        <span>★</span>
                    </div>
                    <p class="text-xs text-white/70">Based on 10,000+ feedbacks</p>
                </div>
            </div>
        </div>

        {{-- Right Image --}}
        <div class="lg:w-1/2 mt-10 lg:mt-0 relative">
            <img 
                src="{{ asset('images/student-thumbsup.jpg') }}" 
                alt="Student" 
                class="h-[80vh] w-[35vw] rounded-xl"
            >
            
            {{-- Stats Overlay --}}
            <div class="absolute top-10 right-10 text-sm bg-white/10 backdrop-blur-md rounded-lg p-4 text-white bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)]">
                <p>Total Courses</p>
                <p class="text-xl font-bold">1200+</p>
            </div>
            <div class="absolute bottom-16 right-20 text-sm bg-white/10 backdrop-blur-md rounded-lg p-4 text-white bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)]">
                <p>Total Instructors</p>
                <p class="text-xl font-bold">400+</p>
            </div>
            <div class="absolute bottom-4 left-4 text-sm bg-white/10 backdrop-blur-md rounded-lg p-4 text-white bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)]">
                <p>Total Students</p>
                <p class="text-xl font-bold">20,000+</p>
            </div>
        </div>
    </section>

    {{-- Feature Section --}}
    <section class="bg-[#f8fafa] py-6 px-6 lg:px-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            {{-- Card 1 --}}
            <div class="flex items-center justify-center gap-3">
                <div class="bg-white rounded-xl p-2 shadow-md">
                    <img src="{{ asset('images/audio.png') }}" alt="Audio & Video" class="w-12 h-12">
                </div>
                <div class="flex flex-col items-start">
                    <h3 class="text-lg font-semibold text-gray-900">Audio & Video</h3>
                    <p class="text-sm text-gray-500 mt-1 text-start">Included Audio and Video For All Course</p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="flex items-center justify-center gap-3">
                <div class="bg-white rounded-xl p-2 shadow-md">
                    <img src="{{ asset('images/virtual-class.avif') }}" alt="Virtual Classroom" class="w-12 h-12">
                </div>
                <div class="flex flex-col items-start">
                    <h3 class="text-lg font-semibold text-gray-900">Virtual Classroom</h3>
                    <p class="text-sm text-gray-500 mt-1 text-start">Virtual Learning Known As A Computer Or Platform</p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="flex items-center justify-center gap-3">
                <div class="bg-white rounded-xl p-2 shadow-md">
                    <img src="{{ asset('images/group-learning.avif') }}" alt="Group Learning" class="w-12 h-12">
                </div>
                <div class="flex flex-col items-start">
                    <h3 class="text-lg font-semibold text-gray-900">Group Learning</h3>
                    <p class="text-sm text-gray-500 mt-1 text-start">A Place Via Socializing A Computer Or Mobile</p>
                </div>
            </div>
        </div>
    </section>

        {{-- Full-Width About Section --}}
    <section class="w-full py-16 px-4">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            {{-- Left Column --}}
            <div class="flex gap-3 space-y-6">
                <div class="flex flex-col gap-3">
                    <p class="bg-red-400 p-2 text-center w-[17vw] text-sm rounded-xl">
                        <span class="font-bold text-xl">24 Years of</span> <br/>
                        Experience
                    </p>
                    <img src="{{ asset('images/student-1.jpg') }}" class="h-80 object-cover rounded-xl shadow-md" alt="Student">
                </div>

                <div class="flex flex-col gap-3 relative">
                    <img src="{{ asset('images/student-2.jpg') }}" class="h-80 object-cover rounded-xl shadow-md" alt="Student">
                    <p class="bg-white text-black p-2 text-center w-[17vw] text-sm rounded-xl">
                        <span class="font-bold text-xl">32K+</span> <br>
                        Positive Reviews
                    </p>
                </div>

                {{-- Experience Badge --}}
                {{-- <div class="bg-[#006769] text-white text-sm font-semibold px-6 py-2 rounded-md">
                    24 Years Of Experience
                </div> --}}

                {{-- Stacked Images --}}
                {{-- <div class="flex gap-4 w-full max-w-xl">
                    <img src="{{ asset('images/student-1.jpg') }}" class="w-1/2 h-64 object-cover rounded-xl shadow-md" alt="Student">
                    <img src="{{ asset('images/student-2.jpg') }}" class="w-1/2 h-64 object-cover rounded-xl shadow-md" alt="Student">
                </div> --}}

                {{-- Review Card --}}
                {{-- <div class="bg-[#9DDE8B] p-4 rounded-lg shadow text-[#006769]">
                    <p class="text-2xl font-bold">32K+</p>
                    <p class="text-sm">Positive Reviews</p>
                </div> --}}
            </div>

            {{-- Right Column --}}
            <div class="text-[#9DDE8B] space-y-6">
                <h4 class="text-sm font-semibold uppercase">About Venkys.io</h4>
                <h2 class="text-4xl font-bold leading-snug">
                    A New Different Way<br>To Improve Your Skills.
                </h2>
                <p class="text-sm max-w-md">
                    Education is one of the most essential and valuable assets that an individual can possess.
                    It plays a pivotal role in shaping your career and confidence.
                </p>

                {{-- Two Feature Cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-xl text-[#006769]">
                    <div class="bg-[#9DDE8B] p-4 rounded-lg shadow">
                        <h5 class="font-semibold">Build Your Career</h5>
                        <p class="text-xs mt-1">Online Course Quickly From Anywhere & Anytime.</p>
                    </div>
                    <div class="bg-[#9DDE8B] p-4 rounded-lg shadow">
                        <h5 class="font-semibold">Grow Your Skills</h5>
                        <p class="text-xs mt-1">Online Course Quickly From Anywhere & Anytime.</p>
                    </div>
                </div>

                {{-- CTA Button --}}
                <button class="bg-[#40A578] text-white font-semibold px-6 py-3 rounded-full transition-all hover:bg-[#9DDE8B]">
                    Explore More →
                </button>
            </div>

        </div>
    </section>

    {{-- Part 5: Why Choose Us (Full Width) --}}
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-[1600px] mx-auto space-y-12">

            {{-- Top Heading Row --}}
            <div class="flex flex-col lg:flex-row justify-between items-center gap-8 px-20">
                <div>
                    <h2 class="text-3xl font-bold text-[#006769] leading-relaxed">
                        Why choose <br/>
                        <span class="text-[#40A578] text-5xl font-serif">Venkys.io</span>?
                    </h2>
                </div>
                <div class="flex flex-col lg:items-end text-center lg:text-right">
                    <p class="text-sm text-[#006769] mb-3 max-w-md">
                        As we know, on internet we can find many same products like this.<br>
                        But we will tell you why we better.
                    </p>
                    <button class="bg-[#40A578] hover:bg-[#9DDE8B] text-white px-6 py-3 rounded-full font-semibold transition">
                        Enroll Now
                    </button>
                </div>
            </div>

            {{-- Cards Section --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center w-full">
                {{-- Card 1 --}}
                <div class="bg-[#9DDE8B] p-6 rounded-3xl shadow">
                    <div class="text-2xl mb-3">📘</div>
                    <h4 class="text-[#006769] font-bold mb-2">Expert Instructions</h4>
                    <p class="text-xs text-[#006769]">We’ll tell you why we’re better.</p>
                </div>

                {{-- Card 2 --}}
                <div class="bg-[#9DDE8B] p-6 rounded-3xl shadow">
                    <div class="text-2xl mb-3">🎓</div>
                    <h4 class="text-[#006769] font-bold mb-2">Scholarship</h4>
                    <p class="text-xs text-[#006769]">We’ll tell you why we’re better.</p>
                </div>

                {{-- Card 3 --}}
                <div class="bg-[#9DDE8B] p-6 rounded-3xl shadow">
                    <div class="text-2xl mb-3">🎥</div>
                    <h4 class="text-[#006769] font-bold mb-2">Recorded Sessions</h4>
                    <p class="text-xs text-[#006769]">We’ll tell you why we’re better.</p>
                </div>

                {{-- Card 4 --}}
                <div class="bg-[#9DDE8B] p-6 rounded-3xl shadow">
                    <div class="text-2xl mb-3">🧪</div>
                    <h4 class="text-[#006769] font-bold mb-2">Practical Learning</h4>
                    <p class="text-xs text-[#006769]">We’ll tell you why we’re better.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Part 6: Our Resources --}}
    <section class="w-full py-20 px-6 bg-gray-100">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

            {{-- Left Illustration --}}
            <div class="flex justify-center">
                <img 
                    src="{{ asset('images/resources-illustration.webp') }}" 
                    alt="Resources Illustration" 
                    class="w-full max-w-md h-[500px] rounded-xl"
                >
            </div>

            {{-- Right Content --}}
            <div>
                <h2 class="text-3xl font-bold text-[#006769] mb-2">Our Resources</h2>
                <p class="text-sm text-gray-500 mb-6">
                    Interactive educational solutions, tailored to students’ needs to support their learning.
                </p>

                {{-- Feature Grid Box --}}
                <div class="bg-[#cbef53] p-6 rounded-2xl shadow-md text-[#006769] relative">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                        {{-- Row 1 --}}
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">🧠</div>
                            <span>Mind Map</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">📄</div>
                            <span>Test Papers with Video Solution</span>
                        </div>

                        {{-- Row 2 --}}
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">📝</div>
                            <span>Revision Notes</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">📘</div>
                            <span>Study Planner</span>
                        </div>

                        {{-- Row 3 --}}
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">🎥</div>
                            <span>Video Lectures</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">📚</div>
                            <span>NCERT Solution</span>
                        </div>

                        {{-- Row 4 --}}
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm font-bold">📆</div>
                            <span>Previous Year Exam Questions</span>
                        </div>
                    </div>

                    {{-- CTA Button --}}
                    <div class="absolute bottom-4 right-4">
                        <button class="bg-[#006769] text-[#E6FF94] px-5 py-2 rounded-full font-semibold hover:bg-[#40A578] transition">
                            VIEW ALL
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Part 7: Our Popular Courses --}}
    <section class="w-full bg-[#006769] py-20 px-6">
        <div class="max-w-[1600px] mx-auto text-center text-white space-y-10">

            {{-- Heading --}}
            <div>
                <h2 class="text-3xl font-bold">
                    Our <span class="bg-[#9DDE8B] text-[#006769] px-3 py-1 rounded-md">Popular</span> Courses
                </h2>
                <p class="text-sm text-[#E6FF94] mt-2 max-w-2xl mx-auto">
                    All of our courses offer assignments, mentorship, relevant resources, and tools so you can learn in depth anywhere you are.
                </p>
            </div>

            {{-- Course Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-left">
                
                {{-- Card 1 --}}
                <div class="bg-[#40A578] rounded-2xl p-5 shadow-md">
                    <img src="{{ asset('images/course-1.jpg') }}" class="rounded-xl mb-4 h-48 w-full" alt="Google Data Analytic">
                    <span class="inline-block bg-[#006769] text-white text-xs px-3 py-1 rounded-full mb-2">Data Analytic</span>
                    <h4 class="text-lg font-bold text-white">Google Data Analytics</h4>
                    <p class="text-xs text-[#E6FF94] mt-1">⭐ 4.8 • 1.6k Students • Beginner</p>
                    <p class="text-sm mt-2">Spreadsheet, Data Cleansing, Data Visualization, SQL, etc.</p>
                    <button class="mt-4 w-full bg-[#E6FF94] text-[#006769] font-bold py-2 rounded-full hover:bg-white transition">
                        Enroll Now
                    </button>
                </div>

                {{-- Card 2 --}}
                <div class="bg-[#40A578] rounded-2xl p-5 shadow-md">
                    <img src="{{ asset('images/course-2.jpg') }}" class="rounded-xl mb-4 h-48 w-full" alt="UX Design">
                    <span class="inline-block bg-[#006769] text-white text-xs px-3 py-1 rounded-full mb-2">UI/UX Design</span>
                    <h4 class="text-lg font-bold text-white">Foundations Of UX Design</h4>
                    <p class="text-xs text-[#E6FF94] mt-1">⭐ 4.8 • 1.6k Students • Beginner</p>
                    <p class="text-sm mt-2">UX, Research, Wireframe, Prototyping, User Testing, etc.</p>
                    <button class="mt-4 w-full bg-[#E6FF94] text-[#006769] font-bold py-2 rounded-full hover:bg-white transition">
                        Enroll Now
                    </button>
                </div>

                {{-- Card 3 --}}
                <div class="bg-[#40A578] rounded-2xl p-5 shadow-md">
                    <img src="{{ asset('images/course-3.webp') }}" class="rounded-xl mb-4 h-48 w-full" alt="Web Development">
                    <span class="inline-block bg-[#006769] text-white text-xs px-3 py-1 rounded-full mb-2">Web Development</span>
                    <h4 class="text-lg font-bold text-white">Meta Front-End Developer</h4>
                    <p class="text-xs text-[#E6FF94] mt-1">⭐ 4.8 • 1.6k Students • Beginner</p>
                    <p class="text-sm mt-2">HTML, CSS, JavaScript, React, NodeJS, ExpressJS, Git, Hosting, etc.</p>
                    <button class="mt-4 w-full bg-[#E6FF94] text-[#006769] font-bold py-2 rounded-full hover:bg-white transition">
                        Enroll Now
                    </button>
                </div>

            </div>
        </div>
    </section>

    {{-- Part 8: Find a Career Section --}}
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-[1600px] mx-auto">

            {{-- Top Heading --}}
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-16">
                <div>
                    <h4 class="text-sm text-[#006769] font-semibold uppercase mb-2">Our Courses</h4>
                    <h2 class="text-4xl font-bold text-[#006769]">
                        Find a <span class="bg-[#9DDE8B] px-3 py-1 rounded-md">career</span> that works for you
                    </h2>
                </div>
                <div class="mt-6 lg:mt-0">
                    <p class="text-sm text-[#006769] mb-3 max-w-md">
                        Get quality education with us. Here you can find the best courses with top mentors around the world.
                    </p>
                    <a href="#" class="text-[#40A578] font-semibold hover:underline">Explore all the courses</a>
                </div>
            </div>

            {{-- Aligned Career Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 place-items-center">
                
                {{-- Card 1: Cyber Security --}}
                <div class="relative flex flex-col items-center">
                    <div class="absolute -top-8 w-14 h-14 rounded-full bg-[#40A578] text-white text-xl flex items-center justify-center shadow-lg">
                        🌐
                    </div>
                    <div class="w-64 h-64 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-full flex flex-col justify-center items-center text-center px-6 pt-12 shadow">
                        <h4 class="text-lg font-bold text-[#006769] mb-2">Cyber Security</h4>
                        <p class="text-xs text-[#006769]">The complete care of all SEO elements, but also separate packages that you can purchase at any time.</p>
                        <div class="mt-4 text-2xl text-[#006769]">➜</div>
                    </div>
                </div>

                {{-- Card 2: Web Development --}}
                <div class="relative flex flex-col items-center">
                    <div class="absolute -top-8 w-14 h-14 rounded-full bg-[#40A578] text-white text-xl flex items-center justify-center shadow-lg">
                        💻
                    </div>
                    <div class="w-64 h-64 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-full flex flex-col justify-center items-center text-center px-6 pt-12 shadow">
                        <h4 class="text-lg font-bold text-[#006769] mb-2">Web Development</h4>
                        <p class="text-xs text-[#006769]">The complete care of all SEO elements, but also separate packages that you can purchase at any time.</p>
                        <div class="mt-4 text-2xl text-[#006769]">➜</div>
                    </div>
                </div>

                {{-- Card 3: Sales & Marketing --}}
                <div class="relative flex flex-col items-center">
                    <div class="absolute -top-8 w-14 h-14 rounded-full bg-[#40A578] text-white text-xl flex items-center justify-center shadow-lg">
                        📧
                    </div>
                    <div class="w-64 h-64 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-full flex flex-col justify-center items-center text-center px-6 pt-12 shadow">
                        <h4 class="text-lg font-bold text-[#006769] mb-2">Sales & Marketing</h4>
                        <p class="text-xs text-[#006769]">The complete care of all SEO elements, but also separate packages that you can purchase at any time.</p>
                        <div class="mt-4 text-2xl text-[#006769]">➜</div>
                    </div>
                </div>

                {{-- Card 4: Tech Consultant --}}
                <div class="relative flex flex-col items-center">
                    <div class="absolute -top-8 w-14 h-14 rounded-full bg-[#40A578] text-white text-xl flex items-center justify-center shadow-lg">
                        🎧
                    </div>
                    <div class="w-64 h-64 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-full flex flex-col justify-center items-center text-center px-6 pt-12 shadow">
                        <h4 class="text-lg font-bold text-[#006769] mb-2">Technology Consultant</h4>
                        <p class="text-xs text-[#006769]">The complete care of all SEO elements, but also separate packages that you can purchase at any time.</p>
                        <div class="mt-4 text-2xl text-[#006769]">➜</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Part 9: Make Your Learning Enjoyable --}}
    <section class="w-full bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] py-20 px-6">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left Side: Image Grid --}}
            <div class="grid grid-cols-2 gap-4 relative">

                {{-- Top Left --}}
                <img src="{{ asset('images/learn-top-left.jpg') }}" class="rounded-lg w-full h-48 object-cover" alt="Students 1">

                {{-- Top Right (Search Box overlay) --}}
                <div class="relative">
                    <img src="{{ asset('images/learn-top-right.jpg') }}" class="rounded-lg w-full h-48 object-cover" alt="Student 2">
                    <input type="text" placeholder="What do you want to learn?" class="absolute bottom-4 left-4 w-3/4 px-4 py-2 rounded-full shadow text-sm text-black border-2 outline-0">
                    <span class="absolute bottom-4 right-6 bg-[#40A578] text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">🔍</span>
                </div>

                {{-- Bottom Left --}}
                <img src="{{ asset('images/learn-bottom-left.jpg') }}" class="rounded-full w-full h-48 object-cover" alt="Student 3">

                {{-- Bottom Right --}}
                <img src="{{ asset('images/learn-bottom-right.jpg') }}" class="rounded-xl w-full h-48 object-cover" alt="Student 4">

                {{-- Bubble: 100k+ Candidates --}}
                <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-white rounded-full px-6 py-3 shadow-lg flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <img src="{{ asset('images/user1.avif') }}" class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="{{ asset('images/user2.jpg') }}" class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="{{ asset('images/student-1.jpg') }}" class="w-8 h-8 rounded-full border-2 border-white">
                    </div>
                    <p class="text-xs text-[#006769] font-semibold">100k+ Candidates<br>enrolled the courses</p>
                </div>
            </div>

            {{-- Right Side: Heading & Features --}}
            <div class="text-[#006769]">
                <h2 class="text-4xl font-bold mb-4">
                    Make Your <span class="bg-[#9DDE8B] px-2 py-1 rounded-md">Learning</span><br> Enjoyable
                </h2>
                <p class="text-sm mb-8 text-gray-200">
                    There are many websites for learning online but we have plenty of courses taught by our professional tutors who’ve been in the industry for a long time.
                </p>

                {{-- Feature 1 --}}
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-10 h-10 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm">📥</div>
                    <div>
                        <h4 class="font-semibold">Easy Accessible</h4>
                        <p class="text-xs text-gray-200">Materials are easy to access and downloadable.</p>
                    </div>
                </div>

                {{-- Feature 2 --}}
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-10 h-10 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm">💸</div>
                    <div>
                        <h4 class="font-semibold">More Affordable</h4>
                        <p class="text-xs text-gray-200">Affordable pricing with attractive discounts.</p>
                    </div>
                </div>

                {{-- Feature 3 --}}
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-[#40A578] text-white rounded-full flex items-center justify-center text-sm">⏰</div>
                    <div>
                        <h4 class="font-semibold">Flexible Time</h4>
                        <p class="text-xs text-gray-200">Watch any video of any course when you are available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Part 10: Instructors Section --}}
    {{-- <section class="w-full bg-white py-20 px-6">
        <div class="max-w-[1600px] mx-auto space-y-12"> --}}

            {{-- Heading and Description --}}
            {{-- <div class="text-center max-w-2xl mx-auto space-y-4">
                <h2 class="text-4xl font-bold text-[#006769]">
                    All Class taught by all Best <span class="text-[#40A578]">Instructors</span>
                </h2>
                <p class="text-sm text-[#006769]">
                    It is a long established fact that a reader will be distracted by readable content when looking at layout. Lorem Ipsum has more design.
                </p>
            </div> --}}

            {{-- Instructor Cards Grid --}}
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center"> --}}

                {{-- Card 1 --}}
                {{-- <div class="bg-[#9DDE8B] rounded-2xl p-4 flex items-center gap-4 shadow-md">
                    <img src="{{ asset('images/instructor-1.jpg') }}" class="w-24 h-24 object-cover rounded-xl">
                    <div class="text-[#006769]">
                        <h4 class="font-bold text-lg">Fred H Haqe</h4>
                        <p class="text-sm">Trading & Assurance Specialist</p>
                    </div>
                </div> --}}

                {{-- Card 2 --}}
                {{-- <div class="bg-[#40A578] rounded-2xl p-4 flex items-center gap-4 shadow-md">
                    <img src="{{ asset('images/instructor-2.jpg') }}" class="w-24 h-24 object-cover rounded-xl">
                    <div class="text-white">
                        <h4 class="font-bold text-lg">Randy Orton</h4>
                        <p class="text-sm">Trading & Assurance Specialist</p>
                    </div>
                </div> --}}

                {{-- Card 3 --}}
                {{-- <div class="bg-[#E6FF94] rounded-2xl p-4 flex items-center gap-4 shadow-md">
                    <img src="{{ asset('images/instructor-3.jpg') }}" class="w-24 h-24 object-cover rounded-xl">
                    <div class="text-[#006769]">
                        <h4 class="font-bold text-lg">Jhone Wick</h4>
                        <p class="text-sm">UI/UX Designer</p>
                    </div>
                </div> --}}

                {{-- Card 4 --}}
                {{-- <div class="bg-[#006769] rounded-2xl p-4 flex items-center gap-4 shadow-md">
                    <img src="{{ asset('images/instructor-4.jpg') }}" class="w-24 h-24 object-cover rounded-xl">
                    <div class="text-white">
                        <h4 class="font-bold text-lg">Randy Orton</h4>
                        <p class="text-sm">Trading & Assurance Specialist</p>
                    </div>
                </div> --}}

                {{-- Card 5 --}}
                {{-- <div class="bg-[#9DDE8B] rounded-2xl p-4 flex items-center gap-4 shadow-md">
                    <img src="{{ asset('images/instructor-5.jpg') }}" class="w-24 h-24 object-cover rounded-xl">
                    <div class="text-[#006769]">
                        <h4 class="font-bold text-lg">Jhone Wick</h4>
                        <p class="text-sm">UI/UX Designer</p>
                    </div>
                </div> --}}

            {{-- </div> --}}

            {{-- CTA Button --}}
            {{-- <div class="text-center">
                <button class="bg-[#40A578] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#006769] transition">
                    See All Instructors
                </button>
            </div> --}}

        {{-- </div>
    </section> --}}

    {{-- Part 10: Instructors Section --}}
    <section class="min-h-screen bg-white flex flex-col items-center py-20 px-10">
        <div class="max-w-7xl w-full">
            <!-- Top Section -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-20 px-20">
            <h1 class="md:w-1/2 text-4xl font-extrabold leading-snug text-[#1f2137]">
                All Class taught<br />
                by all Best <span class="text-[#7C80F6]">Instructors</span>
            </h1>
            <p class="md:w-1/2 mt-6 md:mt-0 text-sm text-[#1f2137] max-w-md">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more Design..
            </p>
            </div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-3 grid-rows-2 gap-6">
            <!-- Large image first column spanning 2 rows -->
            <div class="row-span-2 rounded-[40px] bg-[#F4953A] flex flex-col items-center p-6">
                <h2 class="text-white text-xl font-semibold mb-1">Fred H Haqe</h2>
                <p class="text-white text-xs mb-6">Senior Web Developer</p>
                <img
                src="images/instructor-1.jpg"
                alt="Fred H Haqe"
                class="rounded-[30px] object-cover w-full p-2 h-[400px]"
                />
            </div>

            <!-- Top middle card -->
            <div class="rounded-[30px] bg-[#D2AED9] flex flex-col items-center p-5">
                <img
                src="images/instructor-2.webp"
                alt="Randy Orton"
                class="rounded-[20px] w-72 p-2 h-40 object-cover mb-3"
                />
                <h2 class="text-white text-lg font-semibold">Randy Orton</h2>
                <p class="text-white text-xs text-center mt-1">DevOps Engineer</p>
            </div>

            <!-- Top right card -->
            <div class="rounded-[30px] bg-[#5048C4] flex flex-col items-center p-5">
                <img
                src="images/instructor-5.jpg"
                alt="Jhone Wick"
                class="rounded-[20px] w-72 h-40 p-2 object-cover mb-3"
                />
                <h2 class="text-white text-lg font-semibold">Jhone Wick</h2>
                <p class="text-white text-xs text-center mt-1">UI/UX Designer</p>
            </div>

            <!-- Bottom middle card -->
            <div class="rounded-[30px] bg-[#14D19E] flex flex-col items-center p-5">
                <img
                src="images/instructor-3.jpg"
                alt="Randy Orton"
                class="rounded-[20px] w-72 h-40 object-cover mb-3"
                />
                <h2 class="text-white text-lg font-semibold">Randy Orton</h2>
                <p class="text-white text-xs text-center mt-1">Cloud Engineer</p>
            </div>

            <!-- Bottom right card -->
            <div class="rounded-[30px] bg-[#FF727B] flex flex-col items-center p-5">
                <img
                src="images/instructor-4.jpg"
                alt="Jhone Wick"
                class="rounded-[20px] w-72 h-40 p-2 object-cover mb-3"
                />
                <h2 class="text-white text-lg font-semibold">Jhone Wick</h2>
                <p class="text-white text-xs text-center mt-1">AI-ML Endineer</p>
            </div>
            </div>

            <!-- Button -->
            <div class="mt-16 flex justify-center">
            <button class="bg-[#7365F9] text-white px-10 py-3 rounded-full font-semibold hover:bg-indigo-600 transition">
                See All <span class="font-bold">Instructors</span>
            </button>
            </div>
        </div>
    </section>

    {{-- Part 11: How to Join Class --}}
    <section class="w-full py-20 px-6 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)]">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left Content --}}
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-[#006769] leading-snug">
                    How to join Class in<br>
                    <span class="text-white font-serif text-5xl">Venkys.io</span>
                </h2>
                <p class="text-sm text-gray-200">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>

                {{-- Steps Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">

                    {{-- Step 1 --}}
                    <div class="flex items-start gap-4">
                        <div class="bg-[#E6FF94] text-[#006769] p-3 rounded-full text-lg shadow">📝</div>
                        <div>
                            <h4 class="font-semibold text-[#006769]">Register</h4>
                            <p class="text-xs text-gray-200">Register first to get started to join the course.</p>
                        </div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="flex items-start gap-4">
                        <div class="bg-[#E6FF94] text-[#006769] p-3 rounded-full text-lg shadow">💳</div>
                        <div>
                            <h4 class="font-semibold text-[#006769]">Pay Bills</h4>
                            <p class="text-xs text-gray-200">Secure your course by paying the fee.</p>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="flex items-start gap-4">
                        <div class="bg-[#E6FF94] text-[#006769] p-3 rounded-full text-lg shadow">📚</div>
                        <div>
                            <h4 class="font-semibold text-[#006769]">Choose Class</h4>
                            <p class="text-xs text-gray-200">Pick your desired class and get started.</p>
                        </div>
                    </div>

                    {{-- Step 4 --}}
                    <div class="flex items-start gap-4">
                        <div class="bg-[#E6FF94] text-[#006769] p-3 rounded-full text-lg shadow">🎉</div>
                        <div>
                            <h4 class="font-semibold text-[#006769]">Enjoy the Class</h4>
                            <p class="text-xs text-gray-200">Dive in and enjoy learning at your pace.</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right Image + Play Button --}}
            <div class="relative">
                <div class="bg-[#9DDE8B] rounded-[4rem] p-2">
                    <img src="{{ asset('images/join-class.webp') }}" alt="Join Class" class="rounded-[4rem] object-cover w-full h-auto">
                </div>
                {{-- Play Button --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <button class="bg-[#40A578] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-[#006769] transition">
                        ▶
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- Part 12: Testimonials --}}
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left Heading + Arrows --}}
            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-[#006769] leading-snug">
                    What <span class="bg-[#9DDE8B] px-2 py-1 rounded-md">People</span><br>
                    Said About Our Courses
                </h2>

                {{-- Arrow Controls --}}
                <div class="flex items-center gap-4">
                    <button class="w-12 h-12 rounded-full border border-[#006769] text-[#006769] flex items-center justify-center text-xl hover:bg-[#E6FF94] transition">
                        ←
                    </button>
                    <button class="w-12 h-12 rounded-full bg-[#40A578] text-white text-xl flex items-center justify-center hover:bg-[#006769] transition">
                        →
                    </button>
                </div>
            </div>

            {{-- Right Testimonials --}}
            <div class="space-y-6">

                {{-- Testimonial 1 --}}
                <div class="bg-[#E6FF94] rounded-2xl p-6 shadow">
                    <p class="text-[#006769] text-sm leading-relaxed mb-4">
                        “After I started learning design with Coursera, I realised that I had improved to very advanced levels. While I’m studying at my university, I design as an additional income & I’m sure that I will do this professionally.”
                    </p>
                    <p class="font-bold text-[#006769]">— James Jacob</p>
                    <p class="text-xs text-[#006769]">Developer</p>
                </div>

                {{-- Testimonial 2 --}}
                <div class="bg-[#9DDE8B] rounded-2xl p-6 shadow">
                    <p class="text-[#006769] text-sm leading-relaxed mb-4">
                        “Impressive e-learning platform with top-notch content and engaging user experience. A game-changer for anyone seeking convenient and effective skill enhancement.”
                    </p>
                    <p class="font-bold text-[#006769]">— Ross Taylor</p>
                    <p class="text-xs text-[#006769]">UI/UX Designer</p>
                </div>

            </div>
        </div>
    </section>

    {{-- Part 13: Membership Plans --}}
    <section class="w-full py-20 px-6 bg-gray-100">
        <div class="max-w-[1600px] mx-auto text-center space-y-12">

            {{-- Heading --}}
            <h2 class="text-4xl font-bold text-[#006769]">
                Join Our <span class="bg-[#9DDE8B] px-2 py-1 rounded-md">Membership</span>,<br>Let’s Start
            </h2>

            {{-- Pricing Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Weekly Plan --}}
                <div class="bg-[#9DDE8B]/30 rounded-[3rem] py-12 px-6 text-center shadow-md flex flex-col items-center justify-between">
                    <h4 class="text-xl font-semibold text-[#006769] mb-2">Weekly Plan</h4>
                    <p class="text-4xl font-bold text-[#006769] mb-1">$299<span class="text-lg font-normal">/Week</span></p>
                    <ul class="text-sm text-[#006769] space-y-2 my-6">
                        <li>✔ 1 Week membership Card</li>
                        <li>✔ Spaces and Group classes</li>
                        <li>✔ No time limit</li>
                        <li>✔ Whenever you like</li>
                    </ul>
                    <button class="border border-[#006769] text-[#006769] px-6 py-2 rounded-full hover:bg-[#E6FF94] transition">
                        Subscribe Now
                    </button>
                </div>

                {{-- Monthly Plan (Highlighted) --}}
                <div class="bg-[#40A578] rounded-[3rem] py-14 px-8 text-center shadow-lg scale-105 transform transition">
                    <h4 class="text-xl font-semibold text-white mb-2">Monthly Plan</h4>
                    <p class="text-4xl font-bold text-white mb-1">$499<span class="text-lg font-normal">/Month</span></p>
                    <ul class="text-sm text-white space-y-2 my-6">
                        <li>✔ 3 Months membership Card</li>
                        <li>✔ Spaces and Group classes</li>
                        <li>✔ No time limit</li>
                        <li>✔ Whenever you like</li>
                    </ul>
                    <button class="bg-[#006769] text-white px-6 py-2 rounded-full hover:bg-white hover:text-[#006769] transition">
                        Subscribe Now
                    </button>
                </div>

                {{-- Yearly Plan --}}
                <div class="bg-[#9DDE8B]/30 rounded-[3rem] py-12 px-6 text-center shadow-md flex flex-col items-center justify-between">
                    <h4 class="text-xl font-semibold text-[#006769] mb-2">Yearly Plan</h4>
                    <p class="text-4xl font-bold text-[#006769] mb-1">$999<span class="text-lg font-normal">/Year</span></p>
                    <ul class="text-sm text-[#006769] space-y-2 my-6">
                        <li>✔ 1 Year membership Card</li>
                        <li>✔ Spaces and Group classes</li>
                        <li>✔ No time limit</li>
                        <li>✔ Whenever you like</li>
                    </ul>
                    <button class="border border-[#006769] text-[#006769] px-6 py-2 rounded-full hover:bg-[#E6FF94] transition">
                        Subscribe Now
                    </button>
                </div>

            </div>
        </div>
    </section>

    {{-- Part 14: Newsletter CTA --}}
    <section class="w-full py-20 px-6">
        <div class="max-w-[1000px] mx-auto bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-3xl px-10 py-16 text-center shadow-md">

            <h2 class="text-3xl font-bold text-[#006769] mb-4">
                Join and Get 30 Days Free Class
            </h2>
            <p class="text-sm text-[#006769] mb-8 text-gray-200">
                There are many variations of passages of learning and class-based content available.
            </p>

            {{-- Subscription Form --}}
            <form class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <input
                    type="email"
                    placeholder="Enter your email address"
                    class="px-6 py-3 rounded-full w-full sm:w-2/3 text-sm outline-none border-[1px] border-[#E6FF94] focus:ring-2 focus:ring-[#40A578]"
                    required
                />
                <button
                    type="submit"
                    class="bg-[#40A578] hover:bg-[#006769] text-white px-6 py-3 rounded-full font-semibold transition"
                >
                    Subscribe
                </button>
            </form>

        </div>
    </section>

    {{-- Part 15: Blog Section --}}
    <section class="w-full bg-white py-20 px-6">
        <div class="max-w-[1600px] mx-auto text-center space-y-12">

            {{-- Heading --}}
            <h2 class="text-3xl font-bold text-[#006769]">Read Our Daily Blogs</h2>

            {{-- Blog Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Blog Card 1 --}}
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-[#40A578]">
                    <img src="{{ asset('images/blog1.jpeg') }}" alt="Blog 1" class="w-full h-48 object-cover">
                    <div class="p-4 text-left text-[#006769]">
                        <h3 class="font-semibold text-md mb-2">
                            10 Realities you really want to reexamine before start profession
                        </h3>
                        <div class="flex justify-between text-xs text-[#006769]/80">
                            <span>06/10/2021</span>
                            <span>7min read</span>
                        </div>
                    </div>
                </div>

                {{-- Blog Card 2 --}}
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-[#40A578]">
                    <img src="{{ asset('images/blog2.jpg') }}" alt="Blog 2" class="w-full h-48 object-cover">
                    <div class="p-4 text-left text-[#006769]">
                        <h3 class="font-semibold text-md mb-2">
                            20 facts you need to reconsider before you start career
                        </h3>
                        <div class="flex justify-between text-xs text-[#006769]/80">
                            <span>12/05/2022</span>
                            <span>5min read</span>
                        </div>
                    </div>
                </div>

                {{-- Blog Card 3 --}}
                <div class="bg-white rounded-xl overflow-hidden shadow-md border border-[#40A578]">
                    <img src="{{ asset('images/blog3.png') }}" alt="Blog 3" class="w-full h-48 object-cover">
                    <div class="p-4 text-left text-[#006769]">
                        <h3 class="font-semibold text-md mb-2">
                            Discover career that matches your skills & interests in job.
                        </h3>
                        <div class="flex justify-between text-xs text-[#006769]/80">
                            <span>11/06/2022</span>
                            <span>4min read</span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Read More Button --}}
            <button class="mt-8 bg-[#40A578] text-white px-6 py-3 rounded-full hover:bg-[#006769] transition">
                Read More
            </button>

        </div>
    </section>

    {{-- Part 16: Newsletter + Footer --}}
    <footer class="bg-[#006769] text-white pt-20">

        {{-- Newsletter Banner --}}
        <div class="max-w-[1000px] mx-auto -mt-36 bg-[linear-gradient(-90deg,#31b978_0%,#1ab69d_100%)] rounded-3xl px-10 py-12 text-center shadow-lg z-10 relative">
            <h2 class="text-2xl font-bold text-[#006769] mb-2">Subscribe to Our Newsletter</h2>
            <p class="text-sm text-gray-200 mb-6">
                All of our courses offer assignments, resources, and tools so you can learn in-depth anywhere you can.
            </p>
            <form class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <input
                    type="email"
                    placeholder="Enter your mail"
                    class="px-6 py-3 rounded-full w-full sm:w-2/3 text-sm focus:outline-none border border-[#E6FF94] focus:ring-2 focus:ring-[#40A578]"
                    required
                />
                <button
                    type="submit"
                    class="bg-[#006769] hover:bg-[#E6FF94] text-white hover:text-[#006769] px-6 py-3 rounded-full font-semibold transition"
                >
                    Subscribe Now
                </button>
            </form>
        </div>

        {{-- Main Footer Section --}}
        <div class="max-w-[1600px] mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-5 gap-10 text-sm mt-12 border-t border-[#40A578]/30 pt-16">

            {{-- Brand --}}
            <div class="md:col-span-1">
                <h1 class="text-2xl font-bold text-white font-serif">Venkys.io</h1>
            </div>

            {{-- Company Links --}}
            <div>
                <h4 class="font-semibold mb-4 text-[#9DDE8B]">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#40A578]">About us</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Careers</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Contact</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Pricing</a></li>
                </ul>
            </div>

            {{-- Student Links --}}
            <div>
                <h4 class="font-semibold mb-4 text-[#9DDE8B]">For Students</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#40A578]">Courses</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Blog</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">FAQs</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Referral Program</a></li>
                </ul>
            </div>

            {{-- Mentor Links --}}
            <div>
                <h4 class="font-semibold mb-4 text-[#9DDE8B]">For Mentors</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#40A578]">Become a Partner</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">How It Works</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Referral Program</a></li>
                </ul>
            </div>

            {{-- Company Partners --}}
            <div>
                <h4 class="font-semibold mb-4 text-[#9DDE8B]">For Companies</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#40A578]">Corporate Training</a></li>
                    <li><a href="#" class="hover:text-[#40A578]">Join as Partner</a></li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-[#40A578]/30 py-6 text-center text-xs text-[#E6FF94]">
            Copyright © {{ date('Y') }} All Rights Reserved —
            <span class="text-[#9DDE8B] font-semibold">Venkys.io</span>
        </div>
    </footer>


</body>
</html>
