@extends('layouts.main')


@section('content')
<div class="content">
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Regular Form
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Input
                </h2>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <div>
                        <label for="regular-form-1" class="form-label">Input Text</label>
                        <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-2" class="form-label">Rounded</label>
                        <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-3" class="form-label">With Help</label>
                        <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                        <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-4" class="form-label">Password</label>
                        <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mt-3">
                        <label for="regular-form-5" class="form-label">Disabled</label>
                        <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-input" class="source-preview"> <code class="html"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-2&quot; type=&quot;text&quot; class=&quot;form-control form-control-rounded&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-3&quot; class=&quot;form-label&quot;HTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-3&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;form-help&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-4&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-4&quot; type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;regular-form-5&quot; class=&quot;form-label&quot;HTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;regular-form-5&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Input -->
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Vertical Form
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <div>
                        <label for="vertical-form-1" class="form-label">Email</label>
                        <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Password</label>
                        <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                    </div>
                    <div class="form-check mt-5">
                        <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label" for="vertical-form-3">Remember me</label>
                    </div>
                    <button class="btn btn-primary mt-5">Login</button>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre id="copy-vertical-form" class="source-preview"> <code class="html"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
        
        
    </div>
</div>
</div>
<!-- END: Content -->


@endsection
