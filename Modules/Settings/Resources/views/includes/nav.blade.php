<nav class="-mb-px flex space-x-8" aria-label="Tabs">
    <x-jet.settings-link href="{{ route('admin.settings.site') }}" :active="request()->routeIs('admin.settings.site')">
        {{ __('Site') }}
    </x-jet.settings-link>

    <x-jet.settings-link href="{{ route('admin.settings.email') }}" :active="request()->routeIs('admin.settings.email')">
        {{ __('Email') }}
    </x-jet.settings-link>

    <x-jet.settings-link href="{{ route('admin.settings.payment') }}" :active="request()->routeIs('admin.settings.payment')">
        {{ __('Payment') }}
    </x-jet.settings-link>

    <x-jet.settings-link href="{{ route('admin.settings.mailchimp') }}" :active="request()->routeIs('admin.settings.mailchimp')">
        {{ __('Mailchimp') }}
    </x-jet.settings-link>

    <x-jet.settings-link href="{{ route('admin.settings.analytics') }}" :active="request()->routeIs('admin.settings.analytics')">
        {{ __('Analytics') }}
    </x-jet.settings-link>
</nav>
