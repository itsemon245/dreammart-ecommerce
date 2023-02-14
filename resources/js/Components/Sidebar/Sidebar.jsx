import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import route from '/vendor/tightenco/ziggy/src/js'
import { usePage } from '@inertiajs/inertia-react'
export default function Sidebar() {
    const { component } = usePage()
    return (
        <nav className=''>
            <ul className='flex flex-col items-baseline bg-base-300 rounded-lg rounded-r-none min-h-max py-5 w-full'>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Profile/Index' ? 'bg-slate-900' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('profile.view')}>Profile</Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Product/Favorites' ? 'bg-slate-900' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('favorite.all')}>Favorites</Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === '' ? 'bg-slate-900' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('profile.view')}>Carts</Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === '' ? 'bg-slate-900' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('profile.view')}>Orders</Link>
                </li>

            </ul>
        </nav>
    )
}
