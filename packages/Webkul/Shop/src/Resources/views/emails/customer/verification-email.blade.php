@component('shop::emails.layouts.master')

    <div>
        <div style="text-align: center;">
            <a href="{{ config('app.url') }}">
                @if ($logo = core()->getCurrentChannel()->logo_url)
                    <img class="logo" src="{{ $logo }}" />
                @else
                    <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                @endif
            </a>
        </div>

        <div  style="font-size:16px; color:#242424; font-weight:600; margin-top: 60px; margin-bottom: 15px">
            Zippy Leatherware - Email Verification
        </div>

        <div>
            This is the mail to verify that the email address you entered is yours.
            Kindly click the 'Verify Your Account' button below to verify your account.
        </div>

        <div  style="margin-top: 40px; text-align: center">
            <a href="{{ route('customer.verify', $data['token']) }}" style="font-size: 16px;
            color: #FFFFFF; text-align: center; background: #0031F0; padding: 10px 100px;text-decoration: none;">Verify Your Account</a>
        </div>
    </div>

@endcomponent