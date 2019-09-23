---
title: Disabling or snoozing monitors
weight: 5
---

If you want to temporarily stop the uptime and the certificate check of a monitor you can disable it.
You must manually enable a disabled monitor before it will resume checking and alerting.

If you want to continue running the uptime and certificate check on a monitor, but pause repeat alerts, you can snooze it.
A snoozed monitor will automatically un-snooze when it recovers.

This is how to disable a monitor for `https://laravel.com`

```bash
php artisan monitor:disable https://laravel.com
```

You can re-enable the checks of a monitor with:

```bash
php artisan monitor:enable https://laravel.com
```

You can snooze a monitor with:

```bash
php artisan monitor:snooze https://laravel.com
```

These commands accept multiple urls comma-separated to enable, disable or snooze multiple monitors at once.
