<div>
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option>My Account</option>

            <option>Company</option>

            <option selected>Team Members</option>

            <option>Billing</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            @include('settings::includes.nav')
        </div>
    </div>
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        @livewire('input.mails', ['mailDriver' => $mail_driver])

        @if ($mail_driver === 'smtp')
            @include('settings::includes.smtp')
        @endif

        @if ($mail_driver === 'mailgun')
            @include('settings::includes.mailgun')
        @endif

        @if ($mail_driver === 'ses')
            @include('settings::includes.ses')
        @endif

        @if ($mail_driver === 'postmark')
            @include('settings::includes.postmark')
        @endif

        @if ($mail_driver === 'sendmail')
            @include('settings::includes.sendmail')
        @endif

        @if ($mail_driver === 'log')
            @include('settings::includes.log')
        @endif
    </div>
</div>
