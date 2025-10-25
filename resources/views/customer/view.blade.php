<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            font-family: 'Inter'
        }

        .product {
            width: 350px;
            height: 315px
        }

        .product-image {
            height: 200px
        }

        .btn {
            width: 46px;
            height: 46px
        }

        .icon {
            width: 26px;
            height: 26px
        }

        .icon {
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('https://www.svgrepo.com/show/526867/cart-large-2.svg')
        }

        @layer theme {
            :root, :host {
                --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
                "Courier New", monospace;
                --color-white: #fff;
                --spacing: 0.25rem;
                --text-sm: 0.875rem;
                --text-sm--line-height: calc(1.25 / 0.875);
                --text-xl: 1.25rem;
                --text-xl--line-height: calc(1.75 / 1.25);
                --font-weight-semibold: 600;
                --radius-2xl: 1rem;
                --default-font-family: var(--font-sans);
                --default-mono-font-family: var(--font-mono);
                --color-white-primary: #F7F8FB;
                --color-black-primary: #425466;
                --color-black-secondary: #27272E;
            }
        }
        @layer base {
            *, ::after, ::before, ::backdrop, ::file-selector-button {
                box-sizing: border-box;
                margin: 0;/*! tailwindcss v4.1.14 | MIT License | https://tailwindcss.com */
            @layer properties;
            @layer theme, base, components, utilities;
            @layer theme {
                :root, :host {
                    --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
                    "Courier New", monospace;
                    --color-white: #fff;
                    --spacing: 0.25rem;
                    --text-sm: 0.875rem;
                    --text-sm--line-height: calc(1.25 / 0.875);
                    --text-xl: 1.25rem;
                    --text-xl--line-height: calc(1.75 / 1.25);
                    --font-weight-semibold: 600;
                    --radius-2xl: 1rem;
                    --default-font-family: var(--font-sans);
                    --default-mono-font-family: var(--font-mono);
                    --color-white-primary: #F7F8FB;
                    --color-black-primary: #425466;
                    --color-black-secondary: #27272E;
                }
            }
            @layer base {
                *, ::after, ::before, ::backdrop, ::file-selector-button {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                    border: 0 solid;
                }
                html, :host {
                    line-height: 1.5;
                    -webkit-text-size-adjust: 100%;
                    tab-size: 4;
                    font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
                    font-feature-settings: var(--default-font-feature-settings, normal);
                    font-variation-settings: var(--default-font-variation-settings, normal);
                    -webkit-tap-highlight-color: transparent;
                }
                hr {
                    height: 0;
                    color: inherit;
                    border-top-width: 1px;
                }
                abbr:where([title]) {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
                }
                h1, h2, h3, h4, h5, h6 {
                    font-size: inherit;
                    font-weight: inherit;
                }
                a {
                    color: inherit;
                    -webkit-text-decoration: inherit;
                    text-decoration: inherit;
                }
                b, strong {
                    font-weight: bolder;
                }
                code, kbd, samp, pre {
                    font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
                    font-feature-settings: var(--default-mono-font-feature-settings, normal);
                    font-variation-settings: var(--default-mono-font-variation-settings, normal);
                    font-size: 1em;
                }
                small {
                    font-size: 80%;
                }
                sub, sup {
                    font-size: 75%;
                    line-height: 0;
                    position: relative;
                    vertical-align: baseline;
                }
                sub {
                    bottom: -0.25em;
                }
                sup {
                    top: -0.5em;
                }
                table {
                    text-indent: 0;
                    border-color: inherit;
                    border-collapse: collapse;
                }
                :-moz-focusring {
                    outline: auto;
                }
                progress {
                    vertical-align: baseline;
                }
                summary {
                    display: list-item;
                }
                ol, ul, menu {
                    list-style: none;
                }
                img, svg, video, canvas, audio, iframe, embed, object {
                    display: block;
                    vertical-align: middle;
                }
                img, video {
                    max-width: 100%;
                    height: auto;
                }
                button, input, select, optgroup, textarea, ::file-selector-button {
                    font: inherit;
                    font-feature-settings: inherit;
                    font-variation-settings: inherit;
                    letter-spacing: inherit;
                    color: inherit;
                    border-radius: 0;
                    background-color: transparent;
                    opacity: 1;
                }
                :where(select:is([multiple], [size])) optgroup {
                    font-weight: bolder;
                }
                :where(select:is([multiple], [size])) optgroup option {
                    padding-inline-start: 20px;
                }
                ::file-selector-button {
                    margin-inline-end: 4px;
                }
                ::placeholder {
                    opacity: 1;
                }
                @supports (not (-webkit-appearance: -apple-pay-button))  or (contain-intrinsic-size: 1px) {
                    ::placeholder {
                        color: currentcolor;
                    @supports (color: color-mix(in lab, red, red)) {
                        color: color-mix(in oklab, currentcolor 50%, transparent);
                    }
                }
            }
            textarea {
                resize: vertical;
            }
            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            ::-webkit-date-and-time-value {
                min-height: 1lh;
                text-align: inherit;
            }
            ::-webkit-datetime-edit {
                display: inline-flex;
            }
            ::-webkit-datetime-edit-fields-wrapper {
                padding: 0;
            }
            ::-webkit-datetime-edit, ::-webkit-datetime-edit-year-field, ::-webkit-datetime-edit-month-field, ::-webkit-datetime-edit-day-field, ::-webkit-datetime-edit-hour-field, ::-webkit-datetime-edit-minute-field, ::-webkit-datetime-edit-second-field, ::-webkit-datetime-edit-millisecond-field, ::-webkit-datetime-edit-meridiem-field {
                padding-block: 0;
            }
            ::-webkit-calendar-picker-indicator {
                line-height: 1;
            }
            :-moz-ui-invalid {
                box-shadow: none;
            }
            button, input:where([type="button"], [type="reset"], [type="submit"]), ::file-selector-button {
                appearance: button;
            }
            ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
                height: auto;
            }
            [hidden]:where(:not([hidden="until-found"])) {
                display: none !important;
            }
        }
        @layer utilities {
            .absolute {
                position: absolute;
            }
            .relative {
                position: relative;
            }
            .top-4 {
                top: calc(var(--spacing) * 4);
            }
            .right-0 {
                right: calc(var(--spacing) * 0);
            }
            .right-5 {
                right: calc(var(--spacing) * 5);
            }
            .left-0 {
                left: calc(var(--spacing) * 0);
            }
            .m-auto {
                margin: auto;
            }
            .mt-1 {
                margin-top: calc(var(--spacing) * 1);
            }
            .mt-2 {
                margin-top: calc(var(--spacing) * 2);
            }
            .mb-7 {
                margin-bottom: calc(var(--spacing) * 7);
            }
            .flex {
                display: flex;
            }
            .h-full {
                height: 100%;
            }
            .h-screen {
                height: 100vh;
            }
            .w-full {
                width: 100%;
            }
            .cursor-pointer {
                cursor: pointer;
            }
            .items-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .rounded-2xl {
                border-radius: var(--radius-2xl);
            }
            .rounded-full {
                border-radius: calc(infinity * 1px);
            }
            .bg-white {
                background-color: var(--color-white);
            }
            .bg-white-primary {
                background-color: var(--color-white-primary);
            }
            .p-2 {
                padding: calc(var(--spacing) * 2);
            }
            .pl-4 {
                padding-left: calc(var(--spacing) * 4);
            }
            .text-sm {
                font-size: var(--text-sm);
                line-height: var(--tw-leading, var(--text-sm--line-height));
            }
            .text-xl {
                font-size: var(--text-xl);
                line-height: var(--tw-leading, var(--text-xl--line-height));
            }
            .leading-6 {
                --tw-leading: calc(var(--spacing) * 6);
                line-height: calc(var(--spacing) * 6);
            }
            .leading-\[136\.5\%\] {
                --tw-leading: 136.5%;
                line-height: 136.5%;
            }
            .font-semibold {
                --tw-font-weight: var(--font-weight-semibold);
                font-weight: var(--font-weight-semibold);
            }
            .text-black-primary {
                color: var(--color-black-primary);
            }
            .text-black-secondary {
                color: var(--color-black-secondary);
            }
            .capitalize {
                text-transform: capitalize;
            }
            .shadow-md {
                --tw-shadow: 0 4px 6px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 2px 4px -2px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }
            .shadow-sm {
                --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 1px 2px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }
        }
        @property --tw-leading {
            syntax: "*";
            inherits: false;
        }
        @property --tw-font-weight {
            syntax: "*";
            inherits: false;
        }
        @property --tw-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-shadow-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }
        @property --tw-inset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-inset-shadow-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-inset-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }
        @property --tw-ring-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-inset-ring-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-inset-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-ring-inset {
            syntax: "*";
            inherits: false;
        }
        @property --tw-ring-offset-width {
            syntax: "<length>";
            inherits: false;
            initial-value: 0px;
        }
        @property --tw-ring-offset-color {
            syntax: "*";
            inherits: false;
            initial-value: #fff;
        }
        @property --tw-ring-offset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @layer properties {
            @supports ((-webkit-hyphens: none) and (not (margin-trim: inline))) or ((-moz-orient: inline) and (not (color:rgb(from red r g b)))) {
                *, ::before, ::after, ::backdrop {
                    --tw-leading: initial;
                    --tw-font-weight: initial;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-color: initial;
                    --tw-shadow-alpha: 100%;
                    --tw-inset-shadow: 0 0 #0000;
                    --tw-inset-shadow-color: initial;
                    --tw-inset-shadow-alpha: 100%;
                    --tw-ring-color: initial;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-inset-ring-color: initial;
                    --tw-inset-ring-shadow: 0 0 #0000;
                    --tw-ring-inset: initial;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-offset-shadow: 0 0 #0000;
                }
            }
        }

        padding: 0;
        border: 0 solid;
        }
        html, :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            tab-size: 4;
            font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
            font-feature-settings: var(--default-font-feature-settings, normal);
            font-variation-settings: var(--default-font-variation-settings, normal);
            -webkit-tap-highlight-color: transparent;
        }
        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }
        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }
        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit;
        }
        a {
            color: inherit;
            -webkit-text-decoration: inherit;
            text-decoration: inherit;
        }
        b, strong {
            font-weight: bolder;
        }
        code, kbd, samp, pre {
            font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
            font-feature-settings: var(--default-mono-font-feature-settings, normal);
            font-variation-settings: var(--default-mono-font-variation-settings, normal);
            font-size: 1em;
        }
        small {
            font-size: 80%;
        }
        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }
        sub {
            bottom: -0.25em;
        }
        sup {
            top: -0.5em;
        }
        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }
        :-moz-focusring {
            outline: auto;
        }
        progress {
            vertical-align: baseline;
        }
        summary {
            display: list-item;
        }
        ol, ul, menu {
            list-style: none;
        }
        img, svg, video, canvas, audio, iframe, embed, object {
            display: block;
            vertical-align: middle;
        }
        img, video {
            max-width: 100%;
            height: auto;
        }
        button, input, select, optgroup, textarea, ::file-selector-button {
            font: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            letter-spacing: inherit;
            color: inherit;
            border-radius: 0;
            background-color: transparent;
            opacity: 1;
        }
        :where(select:is([multiple], [size])) optgroup {
            font-weight: bolder;
        }
        :where(select:is([multiple], [size])) optgroup option {
            padding-inline-start: 20px;
        }
        ::file-selector-button {
            margin-inline-end: 4px;
        }
        ::placeholder {
            opacity: 1;
        }
        @supports (not (-webkit-appearance: -apple-pay-button))  or (contain-intrinsic-size: 1px) {
            ::placeholder {
                color: currentcolor;
            @supports (color: color-mix(in lab, red, red)) {
                color: color-mix(in oklab, currentcolor 50%, transparent);
            }
        }
        }
        textarea {
            resize: vertical;
        }
        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        ::-webkit-date-and-time-value {
            min-height: 1lh;
            text-align: inherit;
        }
        ::-webkit-datetime-edit {
            display: inline-flex;
        }
        ::-webkit-datetime-edit-fields-wrapper {
            padding: 0;
        }
        ::-webkit-datetime-edit, ::-webkit-datetime-edit-year-field, ::-webkit-datetime-edit-month-field, ::-webkit-datetime-edit-day-field, ::-webkit-datetime-edit-hour-field, ::-webkit-datetime-edit-minute-field, ::-webkit-datetime-edit-second-field, ::-webkit-datetime-edit-millisecond-field, ::-webkit-datetime-edit-meridiem-field {
            padding-block: 0;
        }
        ::-webkit-calendar-picker-indicator {
            line-height: 1;
        }
        :-moz-ui-invalid {
            box-shadow: none;
        }
        button, input:where([type="button"], [type="reset"], [type="submit"]), ::file-selector-button {
            appearance: button;
        }
        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto;
        }
        [hidden]:where(:not([hidden="until-found"])) {
            display: none !important;
        }
        }
        @layer utilities {
            .absolute {
                position: absolute;
            }
            .relative {
                position: relative;
            }
            .top-4 {
                top: calc(var(--spacing) * 4);
            }
            .right-0 {
                right: calc(var(--spacing) * 0);
            }
            .right-5 {
                right: calc(var(--spacing) * 5);
            }
            .left-0 {
                left: calc(var(--spacing) * 0);
            }
            .m-auto {
                margin: auto;
            }
            .mt-1 {
                margin-top: calc(var(--spacing) * 1);
            }
            .mt-2 {
                margin-top: calc(var(--spacing) * 2);
            }
            .mb-7 {
                margin-bottom: calc(var(--spacing) * 7);
            }
            .flex {
                display: flex;
            }
            .h-full {
                height: 100%;
            }
            .h-screen {
                height: 100vh;
            }
            .w-full {
                width: 100%;
            }
            .cursor-pointer {
                cursor: pointer;
            }
            .items-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .rounded-2xl {
                border-radius: var(--radius-2xl);
            }
            .rounded-full {
                border-radius: calc(infinity * 1px);
            }
            .bg-white {
                background-color: var(--color-white);
            }
            .bg-white-primary {
                background-color: var(--color-white-primary);
            }
            .p-2 {
                padding: calc(var(--spacing) * 2);
            }
            .pl-4 {
                padding-left: calc(var(--spacing) * 4);
            }
            .text-sm {
                font-size: var(--text-sm);
                line-height: var(--tw-leading, var(--text-sm--line-height));
            }
            .text-xl {
                font-size: var(--text-xl);
                line-height: var(--tw-leading, var(--text-xl--line-height));
            }
            .leading-6 {
                --tw-leading: calc(var(--spacing) * 6);
                line-height: calc(var(--spacing) * 6);
            }
            .leading-\[136\.5\%\] {
                --tw-leading: 136.5%;
                line-height: 136.5%;
            }
            .font-semibold {
                --tw-font-weight: var(--font-weight-semibold);
                font-weight: var(--font-weight-semibold);
            }
            .text-black-primary {
                color: var(--color-black-primary);
            }
            .text-black-secondary {
                color: var(--color-black-secondary);
            }
            .capitalize {
                text-transform: capitalize;
            }
            .shadow-md {
                --tw-shadow: 0 4px 6px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 2px 4px -2px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }
            .shadow-sm {
                --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 1px 2px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }
        }
        @property --tw-leading {
            syntax: "*";
            inherits: false;
        }
        @property --tw-font-weight {
            syntax: "*";
            inherits: false;
        }
        @property --tw-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-shadow-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }
        @property --tw-inset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-inset-shadow-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-inset-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%;
        }
        @property --tw-ring-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-inset-ring-color {
            syntax: "*";
            inherits: false;
        }
        @property --tw-inset-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @property --tw-ring-inset {
            syntax: "*";
            inherits: false;
        }
        @property --tw-ring-offset-width {
            syntax: "<length>";
            inherits: false;
            initial-value: 0px;
        }
        @property --tw-ring-offset-color {
            syntax: "*";
            inherits: false;
            initial-value: #fff;
        }
        @property --tw-ring-offset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000;
        }
        @layer properties {
            @supports ((-webkit-hyphens: none) and (not (margin-trim: inline))) or ((-moz-orient: inline) and (not (color:rgb(from red r g b)))) {
                *, ::before, ::after, ::backdrop {
                    --tw-leading: initial;
                    --tw-font-weight: initial;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-color: initial;
                    --tw-shadow-alpha: 100%;
                    --tw-inset-shadow: 0 0 #0000;
                    --tw-inset-shadow-color: initial;
                    --tw-inset-shadow-alpha: 100%;
                    --tw-ring-color: initial;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-inset-ring-color: initial;
                    --tw-inset-ring-shadow: 0 0 #0000;
                    --tw-ring-inset: initial;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-offset-shadow: 0 0 #0000;
                }
            }
        }

    </style>
</head>
<body>

<body class="h-screen flex items-center justify-center bg-white-primary">

<div class="product p-2 shadow-sm rounded-2xl bg-white">
    <div class="product-image relative mt-1 mb-7 rounded-2xl">
        <img src="https://picsum.photos/350/200.webp" alt="" class="w-full h-full absolute left-0 right-0 m-auto rounded-2xl" />
        <button class="btn absolute top-4 right-5 shadow-md cursor-pointer rounded-full bg-white">
            <i class="icon flex items-center justify-center m-auto"></i>
        </button>
    </div>
    <h3 class="headline pl-4 font-semibold text-sm leading-6"><a href="#" class="product-title capitalize text-black-primary">

            {{$obj->first_name}}  {{$obj->last_name}}

        </a></h3>
    <div class="price mt-2">
        <span class="text-xl pl-4 font-semibold capitalize leading-[136.5%] text-black-secondary">
            {{$obj->address}}
        </span>
    </div>
</div>



<a href="{{route('customer.index')}}">Go Back</a>

</body>

</body>
</html>
