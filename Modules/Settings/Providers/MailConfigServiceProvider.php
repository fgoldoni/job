<?php

namespace Modules\Settings\Providers;

use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Modules\Settings\Entities\Setting;

class MailConfigServiceProvider extends ServiceProvider
{

    public function boot(Factory $cache, Setting $setting)
    {
        if (Schema::hasTable('settings')) {
            $setting = $cache->rememberForever('settings', function () use ($setting) {
                return $setting->pluck('value', 'name')->all();
            });

            config()->set('setting', $setting);
        }

        config()->set('mail.default', config('setting.mail_driver'));
        config()->set('mail.mailers.smtp.host', config('setting.mail_host'));
        config()->set('mail.mailers.smtp.port', config('setting.mail_port'));
        config()->set('mail.mailers.smtp.encryption', config('setting.mail_encryption'));
        config()->set('mail.mailers.smtp.username', config('setting.mail_username'));
        config()->set('mail.mailers.smtp.password', config('setting.mail_password'));


        config()->set('mail.mailers.sendmail.path', config('setting.sendmail_path'));
        config()->set('mail.mailers.log.channel', config('setting.log_channel'));

        config()->set('mail.mailers.from.address', config('setting.mail_from'));
        config()->set('mail.mailers.from.name', config('setting.mail_name'));


        config()->set('services.mailgun.domain', config('setting.mailgun_domain'));
        config()->set('services.mailgun.secret', config('setting.mailgun_secret'));
        config()->set('services.mailgun.endpoint', config('setting.mailgun_endpoint'));

        config()->set('services.postmark.token', config('setting.postmark_token'));

        config()->set('services.ses.key', config('setting.ses_key'));
        config()->set('services.ses.secret', config('setting.ses_secret'));
        config()->set('services.ses.region', config('setting.ses_region'));

        config()->set('mail.from.address', config('setting.mail_from'));
        config()->set('mail.from.name', config('setting.mail_name'));

        config()->set('mail.reply_to.address', config('setting.mail_reply_to'));
        config()->set('mail.reply_to.name', config('setting.mail_name'));
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
