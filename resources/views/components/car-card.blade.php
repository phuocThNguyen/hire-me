<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a class="block relative h-48 rounded overflow-hidden" href="/cars/{{$car->slug}}">
      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/' . $car->image_path)}}">
    </a>
    <div class="mt-4">
      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$car->car_brand->name}}</h3>
      <h2 class="text-gray-900 title-font text-lg font-medium">{{$car->model}}</h2>
      <p class="mt-1">${{$car->price}}.00/month</p>
    </div>
</div>