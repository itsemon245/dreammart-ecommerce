import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { UserIcon, ChevronDownIcon, HeartIcon, MapPinIcon, Cog6ToothIcon, InformationCircleIcon, ShoppingCartIcon } from '@heroicons/react/24/outline'

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
                        <Link> <UserIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></UserIcon> Account</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <HeartIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></HeartIcon> Favorites</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <ShoppingCartIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></ShoppingCartIcon> Cart</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <MapPinIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></MapPinIcon> Addresses</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <Cog6ToothIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></Cog6ToothIcon> Settings</Link>
                    </li>
                    <li className='transition-all group font-normal hover:text-primary'>
                        <Link> <InformationCircleIcon className='w-6 h-6 group-hover:text-primary transition-all font-medium text-white'></InformationCircleIcon> Help Center</Link>
                    </li>
                </ul>
            </div>
        </div>
    )
}
