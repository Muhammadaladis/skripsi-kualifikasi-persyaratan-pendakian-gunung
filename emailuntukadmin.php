<!DOCTYPE html>
<html lang="en">
    <head charset=""UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact From App</title>
    <link rel="icon" href="logoxampp.png">
    <link
    href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
    rel="stylesheet"
    
    />
    </head>
    <body>
        <section class="text-gray-600 body-font">
            <form action ="https://formspree.io/f/mknaodqw" method="POST"> 
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Gunung Gede Pangrango</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Pendakian Gunung Gede Pangrango</p>
                <li><a href="admin.php"><i class="fas fa-qrcode"></i>Kembali Ke Halaman Admin</a></li>
                <li><a href="datapendaki.php"><i class="fas fa-qrcode"></i>Data Pendaki</a></li>
              </div>
              <div class="lg:w-1/3 w-full mx-auto px-8">
                <div class="relative flex-grow w-full">
                  <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
                  <input type="text" id="full-name" name="full-name" class="w-full bg-white
                  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent 
                  focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 
                  transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white bg-opacity-50 
                  rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-
                  200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                  <label for="subjek" class="leading-7 text-sm text-gray-600">Subject</label>
                  <input type="subjek" id="subjek" name="subjek" class="w-full bg-white bg-opacity-50 
                  rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-
                  200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                  <label for="message" class="leading-7 text-sm text-gray-600">Text Area</label>
                  <textarea
                  <input type="message" id="message" name="message" class="w-full bg-white bg-opacity-50 
                  rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-
                  200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </textarea>
                </div>
                
                
                
                <button
                type="submit"
                 class="mt-3 w-full text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 
                rounded text-lg">Send my message</button>
              </div>
            </div>
            </form>
          </section>
    </body>
</html>