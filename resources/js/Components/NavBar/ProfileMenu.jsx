import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import route from '/vendor/tightenco/ziggy/src/js'
import { UserIcon, ChevronDownIcon, CubeIcon, MapPinIcon, Cog6ToothIcon, InformationCircleIcon, ShoppingCartIcon, PowerIcon } from '@heroicons/react/24/outline'

export default function ProfileMenu() {
    return (
        <div>
            <div className="dropdown dropdown-bottom dropdown-end">
                <label tabIndex={0} className='flex items-center peer'>
                    <UserIcon className='w-6 h-6 text-white'></UserIcon>
                    <ChevronDownIcon className='w-8 h-4 text-white'></ChevronDownIcon>
                </label>
                <ul tabIndex={0} className="dropdown-content mt-2 menu shadow-lg p-2 bg-base-200 rounded-box w-48">
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link href={route('profile.view')}> <UserIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></UserIcon> Account</Link>
                    </li>

                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link href={route('cart.all')}> <ShoppingCartIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></ShoppingCartIcon> Cart</Link>
                    </li>

                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link href={route('orders.view')}> <CubeIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></CubeIcon> Orders</Link>
                    </li>

                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <MapPinIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></MapPinIcon> Addresses</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link href={route('profile.settings')}> <Cog6ToothIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></Cog6ToothIcon> Settings</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <InformationCircleIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></InformationCircleIcon> Help Center</Link>
                    </li>
                    <li className='mt-5 transition-all group font-normal hover:text-primary'>
                        <Link href={route('logout')}> <PowerIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></PowerIcon> Logout</Link>
                    </li>
                </ul>
            </div>
        </div>
    )
}
