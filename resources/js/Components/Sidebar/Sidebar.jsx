import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import route from '/vendor/tightenco/ziggy/src/js'
import { AiOutlineHeart, AiOutlineShoppingCart } from 'react-icons/ai'
import { GoPackage } from 'react-icons/go'
import { UserIcon } from '@heroicons/react/24/outline'
import { usePage } from '@inertiajs/inertia-react'
export default function Sidebar() {
    const { component } = usePage()
    return (
        <nav className=''>
            <ul className='flex flex-col items-baseline bg-base-300 rounded-lg rounded-r-none min-h-max py-5 w-full'>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Profile/Index' ? 'bg-slate-900 border-l-4 border-primary' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('profile.view')}>
                        <UserIcon className='w-6 h-6 max-sm:block hidden text-white'></UserIcon>
                        <div className='hidden sm:flex gap-2'>
                            <UserIcon className='w-6 h-6 text-white'></UserIcon>
                            Profile
                        </div>
                    </Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Product/Favorites' ? 'bg-slate-900 border-l-4 border-primary' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('favorite.all')}>
                        <AiOutlineHeart className='w-6 h-6 max-sm:block hidden text-white'></AiOutlineHeart>
                        <div className='hidden sm:flex gap-2'>
                            <AiOutlineHeart className='w-6 h-6 text-white'></AiOutlineHeart>
                            Favorites
                        </div>
                    </Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Product/Cart' ? 'bg-slate-900 border-l-4 border-primary' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`} href={route('cart.all')}>
                        <AiOutlineShoppingCart className='w-6 h-6 max-sm:block hidden text-white'></AiOutlineShoppingCart>
                        <div className='hidden sm:flex gap-2'>
                            <AiOutlineShoppingCart className='w-6 h-6 text-white'></AiOutlineShoppingCart>
                            Carts
                        </div>
                    </Link>
                </li>
                <li className='w-full pl-2'>
                    <Link className={`${component === 'Product/Orders' ? 'bg-slate-900 border-l-4 border-primary' : ''} flex px-4 py-3 hover:bg-slate-800 transition-all rounded-md rounded-r-none`}
                        href={route('orders.view')}>
                        <GoPackage className='w-6 h-6 max-sm:block hidden text-white'></GoPackage>
                        <div className='hidden sm:flex gap-2'>
                            <GoPackage className='w-6 h-6 text-white'></GoPackage>
                            Orders
                        </div> </Link>
                </li>

            </ul>
        </nav>
    )
}
