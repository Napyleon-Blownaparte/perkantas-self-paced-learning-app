<!-- Sidebar -->
<nav class="bg-white w-16 p-4 flex flex-col items-center justify-between shadow-lg fixed top-0 z-10 h-screen">
    <!-- Menu Icons -->
    <div class="flex flex-col space-y-6 justify-center flex-grow">
        <a href="{{  route('instructor.courses.index') }}" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
            <!-- Icon  -->
            <svg viewBox="0 0 64 64" width="35" height="35">
                <path d="M57.75 28.3086C58.625 28.3086 59.4375 28.4648 60.1875 28.7773C60.9375 29.0898 61.6042 29.5273 62.1875 30.0898C62.7708 30.6523 63.2083 31.3086 63.5 32.0586C63.7917 32.8086 63.9583 33.6211 64 34.4961C64 35.3086 63.8438 36.1003 63.5312 36.8711C63.2188 37.6419 62.7708 38.319 62.1875 38.9023L39.7812 61.3711L28 64.3086L30.9375 52.5273L53.3438 30.0898C53.9271 29.5065 54.6042 29.069 55.375 28.7773C56.1458 28.4857 56.9375 28.3294 57.75 28.3086ZM59.3438 36.0898C59.7812 35.6523 60 35.1211 60 34.4961C60 33.8503 59.7917 33.3294 59.375 32.9336C58.9583 32.5378 58.4167 32.3294 57.75 32.3086C57.4583 32.3086 57.1771 32.3503 56.9062 32.4336C56.6354 32.5169 56.3958 32.6732 56.1875 32.9023L34.5625 54.5898L33.5 58.8086L37.7188 57.7461L59.3438 36.0898ZM20 28.3086H16V24.3086H20V28.3086ZM48 28.3086H24V24.3086H48V28.3086ZM16 36.3086H20V40.3086H16V36.3086ZM20 16.3086H16V12.3086H20V16.3086ZM48 16.3086H24V12.3086H48V16.3086ZM12 52.3086H25.8438L24.8438 56.3086H8V0.308594H56V23.5273C54.6042 23.7357 53.2708 24.194 52 24.9023V4.30859H12V52.3086ZM24 36.3086H40.0625L36.0625 40.3086H24V36.3086Z" fill="#333333"/>
            </svg>

            <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Courses
            </span>
        </a>
        <a href="{{ route('instructor.instructor-dashboard') }}" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg bg-gray-200">
            <!-- Icon -->
            <svg width="35" height="35" viewBox="0 0 64 65" fill="none">
                <path d="M34.6667 8.30859V24.3086H56V8.30859M34.6667 56.3086H56V29.6419H34.6667M8 56.3086H29.3333V40.3086H8M8 34.9753H29.3333V8.30859H8V34.9753Z" fill="#333333"/>
            </svg>

            <!-- Tooltip -->
            <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Dashboard
            </span>
        </a>
        <a href="{{ route('profile.edit') }}" class="relative group p-2 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-lg">
            <!-- Icon -->
            <svg width="35" height="35" viewBox="0 0 64 61" fill="none">
                <path d="M60.1769 48.9187L59.962 49.1072L60.0154 49.388C60.2164 50.4452 60.2164 51.5307 60.0154 52.5879L59.962 52.8687L60.1769 53.0572L62.9083 55.4531L60.652 59.3565L57.1734 58.1809L56.9072 58.091L56.692 58.2715C55.8777 58.9544 54.9532 59.4937 53.958 59.8664L53.6979 59.9637L53.6431 60.2359L52.9239 63.8079H48.4104L47.6904 60.1838L47.6361 59.9107L47.3753 59.813C46.3801 59.4404 45.4555 58.901 44.6412 58.2182L44.426 58.0377L44.1599 58.1276L40.6812 59.3031L38.4249 55.3998L41.1563 53.0038L41.3723 52.8144L41.3174 52.5325C41.1139 51.4859 41.1139 50.41 41.3174 49.3634L41.3723 49.0815L41.1563 48.8921L38.4249 46.4961L40.6812 42.5927L44.1599 43.7683L44.426 43.8582L44.6412 43.6777C45.4555 42.9949 46.3801 42.4555 47.3753 42.0829L47.6353 41.9855L47.6901 41.7133L48.4093 38.1413H52.9234L53.643 41.7393L53.6975 42.012L53.958 42.1095C54.9532 42.4822 55.8777 43.0215 56.692 43.7044L56.9072 43.8849L57.1734 43.795L60.652 42.6194L62.9083 46.5228L60.1769 48.9187ZM50.6666 56.8079L50.6681 56.8079C52.2134 56.8033 53.6941 56.1874 54.7868 55.0947C55.8794 54.0021 56.4953 52.5214 56.5 50.9761V50.9746C56.5 49.8209 56.1578 48.6931 55.5169 47.7338C54.8759 46.7745 53.9649 46.0268 52.8989 45.5853C51.833 45.1438 50.6602 45.0283 49.5286 45.2534C48.397 45.4784 47.3576 46.034 46.5418 46.8498C45.726 47.6656 45.1705 48.705 44.9454 49.8366C44.7203 50.9681 44.8358 52.141 45.2773 53.2069C45.7188 54.2728 46.4665 55.1839 47.4258 55.8248C48.3851 56.4658 49.5129 56.8079 50.6666 56.8079ZM7.49996 24.3079V24.8079H7.99996H56H56.5V24.3079V8.30794V7.80794H56H7.99996H7.49996V8.30794V24.3079ZM44.4681 17.5117L44.8839 17.7895L44.4681 17.5117C44.2301 17.868 43.8917 18.1457 43.4958 18.3097C43.0999 18.4737 42.6642 18.5166 42.2439 18.433C41.8236 18.3494 41.4376 18.143 41.1346 17.84C40.8316 17.537 40.6252 17.1509 40.5416 16.7306C40.458 16.3103 40.5009 15.8747 40.6649 15.4788C40.8289 15.0829 41.1066 14.7445 41.4629 14.5064C41.8192 14.2683 42.2381 14.1413 42.6666 14.1413C43.2413 14.1413 43.7924 14.3695 44.1987 14.7759C44.605 15.1822 44.8333 15.7333 44.8333 16.3079C44.8333 16.7365 44.7062 17.1554 44.4681 17.5117ZM52.4681 17.5117L52.8839 17.7895L52.4681 17.5117C52.2301 17.868 51.8917 18.1457 51.4958 18.3097C51.0999 18.4737 50.6642 18.5166 50.2439 18.433C49.8236 18.3494 49.4376 18.143 49.1346 17.84C48.8315 17.537 48.6252 17.1509 48.5416 16.7306C48.458 16.3103 48.5009 15.8747 48.6649 15.4788C48.8289 15.0829 49.1066 14.7445 49.4629 14.5064C49.8192 14.2683 50.2381 14.1413 50.6666 14.1413C51.2413 14.1413 51.7924 14.3695 52.1987 14.7759C52.605 15.1822 52.8333 15.7333 52.8333 16.3079C52.8333 16.7365 52.7062 17.1554 52.4681 17.5117ZM60.8333 29.1413H3.16663V3.47461H60.8333V29.1413ZM11.1666 18.4746V14.1413H34.1666V18.4746H11.1666Z" fill="#333333" stroke="white"/>
                <path d="M7.49996 56.3079V56.8079H7.99996H32.4154C32.9036 58.3315 33.5805 59.7871 34.4296 61.1413H3.16663V35.4746H39.4212C37.7611 36.6766 36.3019 38.139 35.1015 39.8079H7.99996H7.49996V40.3079V56.3079Z" fill="#333333" stroke="white"/>
                <path d="M32.1245 46.1426C31.7539 47.5585 31.5467 49.0124 31.507 50.4759H11.1666V46.1426H32.1245Z" fill="#333333" stroke="white"/>
            </svg>

            <span class="absolute left-full top-1/2 -translate-y-1/2 ml-4 w-max px-2 py-1 bg-gray-900 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Profile
            </span>
        </a>
    </div>
</nav>