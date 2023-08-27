<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
/>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                laravel: "#ef3b2d",
            },
        },
    },
};
</script>

<section class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4" style = "background-color: rgba(115,78,235,255) ">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center" style="background-color: rgba(200, 160, 255, 1)"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-black">
            MEN'S<span class="ml-4 text-red-500">BOUTIQUE</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find the best items for yourself
        </p>
        <div>
            <a href="register.html" class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
                Sign Up to make an order
            </a>
        </div>
    </div>
</section>


