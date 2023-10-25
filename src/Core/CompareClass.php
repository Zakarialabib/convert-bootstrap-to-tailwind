<?php

namespace Zakarialabib\ConvertBootstrapToTailwind\Core;

class CompareClass
{
    /**
     * Map of Bootstrap class names to Tailwind class names.
     *
     * @var string[]
     */
    const BOOTSTRAP_CLASSES = [
        // Layout
        'container' => 'max-w-5xl mx-auto',
        'container-fluid' => 'w-full mx-auto',

        'row' => 'flex flex-wrap',
        'col' => 'flex-grow',
        'col-auto' => 'flex-auto',
        'col-1' => 'w-1/12',
        'col-2' => 'w-2/12',
        'col-3' => 'w-3/12',
        'col-4' => 'w-4/12',
        'col-5' => 'w-5/12',
        'col-6' => 'w-6/12',
        'col-7' => 'w-7/12',
        'col-8' => 'w-8/12',
        'col-9' => 'w-9/12',
        'col-10' => 'w-10/12',
        'col-11' => 'w-11/12',
        'col-12' => 'w-full',

        // Responsive
        'col-xs' => 'w-full',
        'col-sm' => 'sm:w-1/2',
        'col-md' => 'md:w-1/2',  // Adjusted from 1/3 to 1/2 for a better fit
        'col-lg' => 'lg:w-1/2',  // Adjusted from 1/4 to 1/2
        'col-xl' => 'xl:w-1/2',  // Adjusted from 1/5 to 1/2

        // Flex
        'd-flex' => 'flex',
        'flex-row' => 'flex-row',
        'flex-row-reverse' => 'flex-row-reverse',
        'flex-column' => 'flex-col',
        'flex-column-reverse' => 'flex-col-reverse',
        'flex-wrap' => 'flex-wrap',
        'flex-nowrap' => 'flex-no-wrap',
        'flex-wrap-reverse' => 'flex-wrap-reverse',
        'flex-grow-0' => 'grow-0',
        'flex-grow-1' => 'grow',
        'flex-shrink-0' => 'shrink-0',
        'flex-shrink-1' => 'shrink',

        'justify-content-start' => 'justify-start',
        'justify-content-end' => 'justify-end',
        'justify-content-center' => 'justify-center',
        'justify-content-between' => 'justify-between',
        'justify-content-around' => 'justify-around',

        // Align
        'align-items-start' => 'items-start',
        'align-items-end' => 'items-end',
        'align-items-center' => 'items-center',
        'align-items-baseline' => 'items-baseline',
        'align-items-stretch' => 'items-stretch',
        'align-content-start' => 'content-start',
        'align-content-end' => 'content-end',
        'align-content-center' => 'content-center',
        'align-content-between' => 'content-between',
        'align-content-around' => 'content-around',
        'align-content-stretch' => 'content-stretch',
        'align-self-auto' => 'self-auto',
        'align-self-start' => 'self-start',
        'align-self-end' => 'self-end',
        'align-self-center' => 'self-center',
        'align-self-stretch' => 'self-stretch',
        'align-baseline' => 'baseline',
        'align-top' => 'top',
        'align-middle' => 'middle',
        'align-bottom' => 'bottom',
        'align-text-top' => 'text-top',
        'align-text-bottom' => 'text-bottom',

        // Display
        'd-none' => 'hidden',
        'd-block' => 'block',
        'd-inline' => 'inline',
        'd-inline-block' => 'inline-block',
        'd-inline-flex' => 'inline-flex',
        'd-table' => 'table',
        'd-table-cell' => 'table-cell',

        // Responsive Utilities
        'd-sm-none' => 'hidden sm:hidden',
        'd-md-none' => 'hidden md:hidden',
        'd-lg-none' => 'hidden lg:hidden',
        'd-xl-none' => 'hidden xl:hidden',
        'd-sm-inline' => 'sm:inline',
        'd-md-inline' => 'md:inline',
        'd-lg-inline' => 'lg:inline',
        'd-xl-inline' => 'xl:inline',
        'd-sm-inline-block' => 'sm:inline-block',
        'd-md-inline-block' => 'md:inline-block',
        'd-lg-inline-block' => 'lg:inline-block',
        'd-xl-inline-block' => 'xl:inline-block',
        'd-sm-block' => 'sm:block',
        'd-md-block' => 'md:block',
        'd-lg-block' => 'lg:block',
        'd-xl-block' => 'xl:block',

        // Float
        'float-left' => 'float-left',
        'float-right' => 'float-right',

        // Sizing
        'w-25' => 'w-1/4',
        'w-50' => 'w-1/2',
        'w-75' => 'w-3/4',
        'w-100' => 'w-full',
        'w-auto' => 'w-auto',
        'h-25' => 'h-1/4',
        'h-50' => 'h-1/2',
        'h-75' => 'h-3/4',
        'h-100' => 'h-full',
        'h-auto' => 'h-auto',

        // Spacing
        'p-1' => 'p-1',
        'p-2' => 'p-2',
        'p-3' => 'p-3',
        'p-4' => 'p-4',
        'p-5' => 'p-5',
        'p-lg-5' => 'lg:p-5',
        'p-xl-5' => 'xl:p-5',
        'm-1' => 'm-1',
        'm-2' => 'm-2',
        'm-3' => 'm-3',
        'm-4' => 'm-4',
        'm-5' => 'm-5',
        'm-lg-5' => 'lg:m-5',
        'm-xl-5' => 'xl:m-5',

        // Disabled
        'disabled' => 'opacity-50 cursor-not-allowed',  // or any other styles for disabled elements

        // Position
        'position-static' => 'static',
        'position-sticky' => 'sticky',
        'position-relative' => 'relative',
        'position-absolute' => 'absolute',
        'position-fixed' => 'fixed',

        // Colors
        'text-primary' => 'text-blue-500',
        'text-secondary' => 'text-gray-500',
        'text-muted' => 'text-gray-500',  // or any muted color in your design
        'blockquote-footer' => 'text-gray-500',  // Color for blockquote footer

        // Background
        'bg-primary' => 'bg-blue-500',
        'bg-secondary' => 'bg-gray-500',
        'bg-light' => 'bg-gray-100',
        'bg-dark' => 'bg-gray-800', //
        'bg-muted' => 'bg-gray-200',  // or any muted color in your design
        'bg-white' => 'bg-white',
        'bg-success' => 'bg-green-500',
        'bg-danger' => 'bg-red-500',
        'bg-warning' => 'bg-yellow-500',
        'bg-info' => 'bg-teal-500',

        // Other layout-related
        'clearfix' => 'clearfix',
        'clearfix::before' => 'block content ""',
        'clearfix::after' => 'block clear-both ""',
        // Shadows
        'shadow-none' => 'shadow-none',
        'shadow-sm' => 'shadow-sm',
        'shadow-lg' => 'shadow-lg',
        'box-shadow' => 'shadow',

        // Hover
        'hover:bg-primary' => 'hover:bg-blue-600',  // replace with your primary color
        'hover:text-primary' => 'hover:text-blue-600',
        'hover:underline' => 'hover:underline',
        'hover:opacity-75' => 'hover:opacity-75',

        // Alerts
        'alert' => 'rounded-md',
        'alert-primary' => 'bg-blue-500',
        'alert-secondary' => 'bg-gray-500',
        'alert-success' => 'bg-green-500',
        'alert-danger' => 'bg-red-500',
        'alert-warning' => 'bg-yellow-500',
        'alert-info' => 'bg-teal-500',
        'alert-light' => 'bg-gray-100',
        'alert-dark' => 'bg-gray-800',
        'alert-link' => 'text-blue-500 underline',
        'alert-dismissible' => 'alert-dismissible flex items-center',

        // Badges
        'badge' => 'inline-block px-2 py-1 rounded-full',
        'badge-pill' => 'rounded-full',
        'badge-primary' => 'bg-blue-500',
        'badge-secondary' => 'bg-gray-500',
        'badge-success' => 'bg-green-500',
        'badge-danger' => 'bg-red-500',
        'badge-warning' => 'bg-yellow-500',
        'badge-info' => 'bg-teal-500',
        'badge-light' => 'bg-gray-100',
        'badge-dark' => 'bg-gray-800',
        'badge-muted' => 'bg-gray-500',
        'badge-pill-muted' => 'rounded-full',

        // Borders
        'border' => 'border',
        'border-primary' => 'border-blue-500',
        'border-secondary' => 'border-gray-500',
        'border-top' => 'border-t',
        'border-right' => 'border-r',
        'border-bottom' => 'border-b',
        'border-left' => 'border-l',
        'border-top-0' => 'border-t-0',
        'border-right-0' => 'border-r-0',
        'border-bottom-0' => 'border-b-0',
        'border-left-0' => 'border-l-0',
        'border-0' => 'border-0',
        'border-top-0' => 'border-t-0',
        'border-right-0' => 'border-r-0',
        'border-bottom-0' => 'border-b-0',
        'border-left-0' => 'border-l-0',
        'rounded' => 'rounded',
        'rounded-top' => 'rounded-t',
        'rounded-right' => 'rounded-r',
        'rounded-bottom' => 'rounded-b',
        'rounded-left' => 'rounded-l',
        'rounded-circle' => 'rounded-full',
        'rounded-0' => 'rounded-none',
        'border-radius' => 'rounded',
        'border-radius-0' => 'rounded-none',

        'bottom' => 'bottom-0',

        // Typography
        'display-1' => 'text-5xl font-extrabold leading-tight',
        'display-2' => 'text-4xl font-bold leading-tight',
        'display-3' => 'text-3xl font-bold leading-tight',
        'display-4' => 'text-2xl font-bold leading-tight',
        'lead' => 'text-lg leading-relaxed',
        'blockquote' => 'blockquote',
        'text-truncate' => 'overflow-hidden overflow-ellipsis whitespace-nowrap',
        'text-highlight' => 'bg-yellow-200',  // Background color for highlighted text
        'text-emphasis' => 'font-bold',  // Emphasized text

        // Text Transformation
        'text-lowercase' => 'lowercase',
        'text-uppercase' => 'uppercase',
        'text-capitalize' => 'capitalize',

        // Font Weight
        'font-weight-bold' => 'font-bold',
        'font-weight-normal' => 'font-normal',
        'font-italic' => 'italic',

        // Buttons
        'btn' => 'font-bold py-2 px-4 rounded',
        'btn-primary' => 'bg-blue-500 hover:bg-blue-700 text-white',
        'btn-secondary' => 'bg-gray-500 hover:bg-gray-700 text-white',
        'btn-success' => 'bg-green-500 hover:bg-green-700 text-white',
        'btn-danger' => 'bg-red-500 hover:bg-red-700 text-white',
        'btn-warning' => 'bg-yellow-500 hover:bg-yellow-700 text-white',
        'btn-info' => 'bg-indigo-500 hover:bg-indigo-700 text-white',
        'btn-light' => 'bg-gray-100 hover:bg-gray-700 text-white',
        'btn-dark' => 'bg-gray-800 hover:bg-gray-700 text-white',
        'btn-link' => 'text-blue-500 underline',
        'btn-link-disabled' => 'text-gray-500 cursor-not-allowed',  // Style for disabled link button
        'btn-lg' => 'text-lg',
        'btn-sm' => 'text-sm',
        'btn-block' => 'block w-full',
        'btn-rounded' => 'rounded-full',
        'btn-outline-primary' => 'border-blue-500 text-blue-500 hover:bg-blue-50',
        'btn-outline-secondary' => 'border-gray-500 text-gray-500 hover:bg-gray-50',
        'btn-outline-success' => 'border-green-500 text-green-500 hover:bg-green-50',
        'btn-outline-danger' => 'border-red-500 text-red-500 hover:bg-red-50',
        'btn-outline-warning' => 'border-yellow-500 text-yellow-500 hover:bg-yellow-50',
        'btn-outline-info' => 'border-teal-500 text-teal-500 hover:bg-teal-50',

        // Cards
        'card' => 'rounded-md',
        'card-header' => 'bg-gray-100',
        'card-header-tabs' => 'border-b-0',
        'card-header-pills' => 'border-radius-top-0',
        'card-deck' => 'flex flex-wrap -mx-4',
        'card-group' => 'flex flex-wrap -mx-4',
        'card-body' => 'px-5 py-5',
        'card-title' => 'text-xl font-bold',
        'card-subtitle' => 'text-lg font-medium',
        'card-text' => 'text-base',
        'card-link' => 'text-blue-500',
        'card-footer' => 'bg-gray-100',
        'card-img-top' => 'rounded-t-md',
        'card-img-bottom' => 'rounded-b-md',

        // Custom select
        'custom-select' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
        'custom-file-input' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',

        // Dropdown
        'dropdown-item' => 'block w-full',
        'dropdown-menu' => 'z-50',
        'dropdown-toggle' => 'relative',
        'dropdown-divider' => 'my-2 border-t',  // Divider between dropdown items
        'dropdown-header' => 'text-gray-500 font-bold',  // Styling for dropdown header

        // Form
        'form-group' => 'my-6',
        'form-group-error' => 'text-red-500',  // Text color for form group error m
        'form-check' => 'items-center mx-2',
        'form-text' => 'text-gray-500',
        'form-control-sm' => 'text-sm py-1 px-2',
        'form-control' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
        'form-control:focus' => 'ring ring-offset-2 ring-gray-500',  // Add focus styling to form controls
        'form-control-plaintext' => 'appearance-none block w-full bg-transparent text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
        'form-control-file' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
        'form-check-inline' => 'inline-flex',
        'form-check-label' => 'ml-2',
        'form-check-input' => 'form-checkbox h-5 w-5 text-blue-500',  // Customize checkbox color
        'form-check-input:checked' => 'bg-blue-500 border-blue-500',  // Style for checked state
        'form-check-input:focus' => 'ring ring-offset-2 ring-blue-500',  // Add focus styling
        'form-input-error' => 'border-red-500 text-red-500',  // Style for form input with errors
        'form-input-valid' => 'border-green-500 text-green-500',  // Style for valid form input

        // Spacing
        'm-auto' => 'm-auto',
        'mt-auto' => 'mt-auto',
        'mb-auto' => 'mb-auto',
        'ml-auto' => 'ml-auto',
        'mr-auto' => 'mr-auto',

        // Lists
        'list-group' => 'divide-y divide-gray-200',
        'list-group-item' => 'px-5 py-3',
        'list-group-item-action' => 'cursor-pointer',

        // Modals
        'modal-dialog' => 'mx-auto',
        'modal-content' => 'rounded-md',
        'modal-header' => 'bg-gray-100',
        'modal-title' => 'text-2xl font-bold',
        'modal-body' => 'px-5 py-5',
        'modal-footer' => 'bg-gray-100',

        // Navbar
        'nav-item' => 'inline-block',
        'nav-link' => 'text-blue-500',
        'navbar-brand' => 'text-xl',
        'navbar-toggler' => 'block',
        'navbar-toggler-icon' => 'w-8 h-8 fill-current',
        'navbar-light' => 'bg-white text-black',  // adjust as per your design
        'navbar-dark' => 'bg-gray-800 text-white',  // adjust as per your desi

        // Offsets
        'offset-1' => 'ml-1/12',
        'offset-2' => 'ml-2/12',
        'offset-3' => 'ml-3/12',
        'offset-4' => 'ml-4/12',
        'offset-5' => 'ml-5/12',
        'offset-6' => 'ml-6/12',
        'offset-7' => 'ml-7/12',
        'offset-8' => 'ml-8/12',
        'offset-9' => 'ml-9/12',
        'offset-10' => 'ml-10/12',
        'offset-11' => 'ml-11/12',

        // Order
        'order-first' => 'order-1',
        'order-last' => 'order-12',

        // Tables
        'table' => 'table-auto',
        'table-responsive' => 'overflow-x-auto',
        'table-responsive-sm' => 'sm:overflow-x-auto',  // Responsive table for small screens
        'thead-light' => 'text-gray-600',
        'tbody-light' => 'text-gray-700',
        'table-striped' => 'striped--light-gray',
        'table-bordered' => 'rounded',
        'table-hover' => 'hover:bg-gray-100',
        'table-sm' => 'text-xs',
        'table-active' => 'bg-gray-200',
        'table-light' => 'bg-gray-100',
        'table-dark' => 'bg-gray-800',

        // Media Object
        'media' => 'flex items-start',
        'media-body' => 'flex-1',
        'media-list' => 'list-none',

        // Popovers
        'popover-title' => 'text-xl font-bold',
        'popover-content' => 'p-4',

        // Animation
        'fade' => 'opacity-0 transition-opacity duration-300',
        'fade.show' => 'opacity-100 transition-opacity duration-300',

        // Overflow
        'overflow-auto' => 'overflow-auto',
        'overflow-hidden' => 'overflow-hidden',
        'overflow-visible' => 'overflow-visible',
        'overflow-scroll' => 'overflow-scroll',
        'overflow-auto-y' => 'overflow-y-auto',
        'overflow-auto-x' => 'overflow-x-auto',
        'overflow-hidden-y' => 'overflow-y-hidden',
        'overflow-hidden-x' => 'overflow-x-hidden',
        'overflow-visible-y' => 'overflow-y-visible',
        'overflow-visible-x' => 'overflow-x-visible',
        'overflow-scroll-y' => 'overflow-y-scroll',
        'overflow-scroll-x' => 'overflow-x-scroll',

        // Width
        'w-50' => 'w-1/2',
        'w-75' => 'w-3/4',
        'w-100' => 'w-full',
        'w-auto' => 'w-auto',
        'min-w-0' => 'min-w-0',
        'max-w-100' => 'max-w-full',
        'max-w-md' => 'max-w-md',
        'max-w-lg' => 'max-w-lg',
        'max-w-xl' => 'max-w-xl',
        'max-w-2xl' => 'max-w-2xl',
        'max-w-3xl' => 'max-w-3xl',
        'max-w-4xl' => 'max-w-4xl',
        'max-w-5xl' => 'max-w-5xl',
        'max-w-screen-sm' => 'max-w-screen-sm',
        'max-w-screen-md' => 'max-w-screen-md',
        'max-w-screen-lg' => 'max-w-screen-lg',
        'max-w-screen-xl' => 'max-w-screen-xl',

        // Height
        'h-50' => 'h-1/2',
        'h-75' => 'h-3/4',
        'h-100' => 'h-full',
        'h-auto' => 'h-auto',
        'min-h-0' => 'min-h-0',
        'max-h-100' => 'max-h-full',
        'max-h-screen-sm' => 'max-h-screen-sm',
        'max-h-screen-md' => 'max-h-screen-md',
        'max-h-screen-lg' => 'max-h-screen-lg',
        'max-h-screen-xl' => 'max-h-screen-xl',

        // Opacity
        'opacity-0' => 'opacity-0',
        'opacity-25' => 'opacity-25',
        'opacity-50' => 'opacity-50',
        'opacity-75' => 'opacity-75',
        'opacity-100' => 'opacity-100',

        // Cursor
        'cursor-auto' => 'cursor-auto',
        'cursor-pointer' => 'cursor-pointer',
        'cursor-not-allowed' => 'cursor-not-allowed',

        // Interactivity
        'pointer-events-none' => 'pointer-events-none',
        'pointer-events-auto' => 'pointer-events-auto',

        // Transition
        'transition' => 'transition',
        'ease-in' => 'transition ease-in',
        'ease-out' => 'transition ease-out',
        'ease-in-out' => 'transition ease-in-out',
        'duration-100' => 'transition duration-100',
        'duration-300' => 'transition duration-300',
        'duration-500' => 'transition duration-500',
        'duration-700' => 'transition duration-700',
        'duration-1000' => 'transition duration-1000',
        'delay-0' => 'transition delay-0',
        'delay-100' => 'transition delay-100',
        'delay-300' => 'transition delay-300',
        'delay-500' => 'transition delay-500',
        'delay-700' => 'transition delay-700',
        'delay-1000' => 'transition delay-1000',

        // White Space
        'whitespace-normal' => 'whitespace-normal',
        'whitespace-no-wrap' => 'whitespace-no-wrap',
        'whitespace-pre' => 'whitespace-pre',
        'whitespace-pre-line' => 'whitespace-pre-line',
        'whitespace-pre-wrap' => 'whitespace-pre-wrap',

        // Word Break
        'break-words' => 'break-words',
        'break-normal' => 'break-normal',
        'break-all' => 'break-all',
    ];

    /**
     * Convert Bootstrap class names to Tailwind class names in an HTML string.
     *
     * @return string
     */
    public function compare(string $html)
    {
        // Extract all Bootstrap class names from the HTML
        preg_match_all('/\b('.implode('|', array_keys(self::BOOTSTRAP_CLASSES)).')\b/', $html, $matches);
        $bootstrapClassNames = $matches[0];

        // Replace each Bootstrap class name with its corresponding Tailwind class name
        foreach ($bootstrapClassNames as $className) {
            if (isset(self::BOOTSTRAP_CLASSES[$className])) {
                $html = str_replace($className, self::BOOTSTRAP_CLASSES[$className], $html);
            }
        }

        return $html;
    }
}
