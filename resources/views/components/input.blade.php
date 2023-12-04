@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-primary-500 focus:ring-[3px] focus:ring-opacity-30 focus:ring-primary-300 rounded-md shadow-sm transition duration-150']) !!}>
