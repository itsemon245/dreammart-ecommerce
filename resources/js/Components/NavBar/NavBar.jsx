import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import route from '/vendor/tightenco/ziggy/src/js';
import NavAuthOption from './NavAuthOption';
import { BiSearch } from 'react-icons/bi';

export default function NavBar({ auth, categories, onSearchClickHandler }) {
    const navLinks = [
        { name: "New Arrivals", route: "page.newArrivals", id: 1 },
        { name: "Popular", route: "page.popular", id: 2 },
        { name: "About us", route: "page.about", id: 4 }
    ]
    return (
        <nav className="navbar lg:px-10 md:px-5 shadow-slate-900 shadow-md">
            <div className="navbar-start">
                <div className="dropdown">
                    <label tabIndex={0} className="btn btn-sm btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabIndex={0} className="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li className='hover:text-primary'><Link href={route('home')}>Home</Link></li>
                        {navLinks.map((link, index) => (
                            <li className='hover:text-primary' key={index}><Link href={route(link.route, link.id)}>{link.name}</Link></li>
                        ))}
                        <li tabIndex={0}>
                            <a className="justify-between hover:text-primary">
                                Browse
                                <svg className="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" /></svg>
                            </a>
                            <ul tabIndex={0} className="dropdown-content menu p-2 bg-base-200 rounded-box transition-all z-10 overflow-visible">
                                <li className='hover:text-primary block transition-all'><Link href={route('browse.all')}>All Products</Link></li>
                                {categories.map((category, index) => (
                                    <li className='hover:text-primary' key={index}><Link href={route('browse.category', category.id)}>{category.name}</Link></li>
                                ))}
                            </ul>
                        </li>
                    </ul>
                </div>
                <Link href='/' className=""><img src='/assets/img/logo/DreamMart.svg' alt="" /></Link>
            </div>
            <div className="lg:nav-center hidden lg:flex">
                <ul className="menu menu-horizontal px-1">
                    <li className='hover:text-primary'><Link href={route('home')}>Home</Link></li>
                    {navLinks.map((link, index) => (
                        <li className='hover:text-primary' key={index}><Link href={route(link.route, link.id)}>{link.name}</Link></li>
                    ))}
                    <li>
                        <div className="dropdown dropdown-bottom dropdown-end">
                            <label tabIndex={0} className='hover:text-primary flex items-center cursor-pointer'>
                                Browse
                                <svg className="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" /></svg>
                            </label>

                            <ul tabIndex={0} className="dropdown-content menu p-2 bg-base-200 rounded-box transition-all z-10 overflow-visible">
                                <li className='hover:text-primary block transition-all'><Link href={route('browse.all')}>All Products</Link></li>
                                {categories.map((category, index) => (
                                    <li className='hover:text-primary block transition-all' key={index}><Link href={route('browse.category', category.id)}>{category.name}</Link></li>
                                ))}
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div className="navbar-end flex lg:gap-x-5 md:gap-x-5 ml-auto gap-x-3">
                <BiSearch onClick={onSearchClickHandler} className='w-6 h-6 text-slate-300'></BiSearch>
                {auth.user !== null ? (
                    <NavAuthOption></NavAuthOption>
                ) : (
                    <>
                        <a href={route('login')} className="text-primary font-semibold capitalize">
                            Log in
                        </a>

                        <a
                            href={route('register')}
                            className="btn max-sm:btn-sm max-sm:text-sm btn-primary max-sm:font-normal capitalize"
                        >
                            Register
                        </a>
                    </>
                )}
            </div>

        </nav>
    )
}

