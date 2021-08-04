@component('mail::message')
  
# Heading

Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore culpa illum corporis? Nemo temporibus officiis autem dicta sequi incidunt quam porro vero id voluptatem. Ratione libero quibusdam sed saepe ex.

This is a list
* First Item
* Second Item
* Third Item

@component('mail::button', ['url' => 'https://www.google.com'])
  visit www.google.com
@endcomponent

@endcomponent