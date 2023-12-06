@props(['disabled' => false])

<input 
    style="height: 48px;
        border-radius: 5px;
        width:100%;
        overflow: hidden;
        background-color: #F5E7F7;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 30px;
        padding-left: 16px;"
        
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
