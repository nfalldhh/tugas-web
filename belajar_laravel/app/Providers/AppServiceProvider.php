<?php
namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $hak_akses = Auth::user()->hak_akses;
            $event->menu->add('Hak Akses: ' . strtoupper($hak_akses));
            $event->menu->add('MENU');
            if ($hak_akses == "administrator") {
                $event->menu->add(
                    [
                        'text' => 'Kelas',
                        'url' => 'kelas',
                        'icon' => 'fas fa-fw fa-building',
                    ],
                    [
                        'text' => 'SPP',
                        'url' => 'spp',
                        'icon' => 'fas fa-fw fa-money-bill-alt',
                    ],
                    [
                        'text' => 'Siswa',
                        'url' => 'siswa',
                        'icon' => 'fas fa-fw fa-users',
                    ],
                    [
                        'text' => 'Petugas',
                        'url' => 'petugas',
                        'icon' => 'fas fa-fw fa-user-tie',
                    ],
                    [
                        'text' => 'Pembayaran',
                        'url' => 'pembayaran',
                        'icon' => 'fas fa-fw fa-cash-register',
                    ],
                    [
                        'text' => 'History Pembayaran',
                        'url' => 'history',
                        'icon' => 'fas fa-fw fa-history',
                    ],
                    [
                        'text' => 'Laporan',
                        'url' => 'laporan',
                        'icon' => 'fas fa-fw fa-file-pdf',
                    ]
                );
            } else if ($hak_akses == "petugas") {
                $event->menu->add(
                    [
                        'text' => 'Pembayaran',
                        'url' => 'pembayaran',
                        'icon' => 'fas fa-fw fa-cash-register',
                    ],
                    [
                        'text' => 'History Pembayaran',
                        'url' => 'history',
                        'icon' => 'fas fa-fw fa-history',
                    ]
                );
            } else {
                $event->menu->add(
                    [
                        'text' => 'History Pembayaran',
                        'url' => 'history',
                        'icon' => 'fas fa-fw fa-history',
                    ]
                );
            }
        });
    }
}