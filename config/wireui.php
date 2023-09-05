<?php

use WireUi\View\Components;

return [
    /*
        |--------------------------------------------------------------------------
        | Icons
        |--------------------------------------------------------------------------
        |
        | The icons config will be used in icon component as default
        | https://heroicons.com
        |
    */
    'icons' => [
        'style' => env('WIREUI_ICONS_STYLE', 'outline'),
    ],

    /*
        |--------------------------------------------------------------------------
        | Modal
        |--------------------------------------------------------------------------
        |
        | The default modal preferences
        |
    */
    'modal' => [
        'zIndex'   => env('WIREUI_MODAL_Z_INDEX', 'z-50'),
        'maxWidth' => env('WIREUI_MODAL_MAX_WIDTH', '2xl'),
        'spacing'  => env('WIREUI_MODAL_SPACING', 'p-4'),
        'align'    => env('WIREUI_MODAL_ALIGN', 'start'),
        'blur'     => env('WIREUI_MODAL_BLUR', false),
    ],

    /*
        |--------------------------------------------------------------------------
        | Card
        |--------------------------------------------------------------------------
        |
        | The default card preferences
        |
    */
    'card' => [
        'padding'   => env('WIREUI_CARD_PADDING', 'px-2 py-5 md:px-4'),
        'shadow'    => env('WIREUI_CARD_SHADOW', 'shadow-md'),
        'rounded'   => env('WIREUI_CARD_ROUNDED', 'rounded-lg'),
        'color'     => env('WIREUI_CARD_COLOR', 'bg-white dark:bg-secondary-800'),
    ],

    /*
        |--------------------------------------------------------------------------
        | Components
        |--------------------------------------------------------------------------
        |
        | List with WireUI components.
        | Change the alias to call the component with a different name.
        | Extend the component and replace your changes in this file.
        | Remove the component from this file if you don't want to use.
        |
     */
    'components' => [
        'avatar' => [
            'class' => Components\Avatar::class,
            'alias' => 'ui-avatar',
        ],
        'icon' => [
            'class' => Components\Icon::class,
            'alias' => 'ui-icon',
        ],
        'icon.spinner' => [
            'class' => Components\Icons\Spinner::class,
            'alias' => 'ui-icon.spinner',
        ],
        'color-picker' => [
            'class' => Components\ColorPicker::class,
            'alias' => 'ui-color-picker',
        ],
        'input' => [
            'class' => Components\Input::class,
            'alias' => 'ui-input',
        ],
        'textarea' => [
            'class' => Components\Textarea::class,
            'alias' => 'ui-textarea',
        ],
        'label' => [
            'class' => Components\Label::class,
            'alias' => 'ui-label',
        ],
        'error' => [
            'class' => Components\Error::class,
            'alias' => 'ui-error',
        ],
        'errors' => [
            'class' => Components\Errors::class,
            'alias' => 'ui-errors',
        ],
        'inputs.maskable' => [
            'class' => Components\Inputs\MaskableInput::class,
            'alias' => 'ui-inputs.maskable',
        ],
        'inputs.phone' => [
            'class' => Components\Inputs\PhoneInput::class,
            'alias' => 'ui-inputs.phone',
        ],
        'inputs.currency' => [
            'class' => Components\Inputs\CurrencyInput::class,
            'alias' => 'ui-inputs.currency',
        ],
        'inputs.number' => [
            'class' => Components\Inputs\NumberInput::class,
            'alias' => 'ui-inputs.number',
        ],
        'inputs.password' => [
            'class' => Components\Inputs\PasswordInput::class,
            'alias' => 'ui-inputs.password',
        ],
        'badge' => [
            'class' => Components\Badge::class,
            'alias' => 'ui-badge',
        ],
        'badge.circle' => [
            'class' => Components\CircleBadge::class,
            'alias' => 'ui-badge.circle',
        ],
        'button' => [
            'class' => Components\Button::class,
            'alias' => 'ui-button',
        ],
        'button.circle' => [
            'class' => Components\CircleButton::class,
            'alias' => 'ui-button.circle',
        ],
        'dropdown' => [
            'class' => Components\Dropdown::class,
            'alias' => 'ui-dropdown',
        ],
        'dropdown.item' => [
            'class' => Components\Dropdown\DropdownItem::class,
            'alias' => 'ui-dropdown.item',
        ],
        'dropdown.header' => [
            'class' => Components\Dropdown\DropdownHeader::class,
            'alias' => 'ui-dropdown.header',
        ],
        'notifications' => [
            'class' => Components\Notifications::class,
            'alias' => 'ui-notifications',
        ],
        'datetime-picker' => [
            'class' => Components\DatetimePicker::class,
            'alias' => 'ui-datetime-picker',
        ],
        'time-picker' => [
            'class' => Components\TimePicker::class,
            'alias' => 'ui-time-picker',
        ],
        'card' => [
            'class' => Components\Card::class,
            'alias' => 'ui-card',
        ],
        'native-select' => [
            'class' => Components\NativeSelect::class,
            'alias' => 'ui-native-select',
        ],
        'select' => [
            'class' => Components\Select::class,
            'alias' => 'ui-select',
        ],
        'select.option' => [
            'class' => Components\Select\Option::class,
            'alias' => 'ui-select.option',
        ],
        'select.user-option' => [
            'class' => Components\Select\UserOption::class,
            'alias' => 'ui-select.user-option',
        ],
        'toggle' => [
            'class' => Components\Toggle::class,
            'alias' => 'ui-toggle',
        ],
        'checkbox' => [
            'class' => Components\Checkbox::class,
            'alias' => 'ui-checkbox',
        ],
        'radio' => [
            'class' => Components\Radio::class,
            'alias' => 'ui-radio',
        ],
        'modal' => [
            'class' => Components\Modal::class,
            'alias' => 'ui-modal',
        ],
        'modal.card' => [
            'class' => Components\ModalCard::class,
            'alias' => 'ui-modal.card',
        ],
        'dialog' => [
            'class' => Components\Dialog::class,
            'alias' => 'ui-dialog',
        ],
    ],
];
