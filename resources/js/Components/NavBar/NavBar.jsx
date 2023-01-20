import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import route from '/vendor/tightenco/ziggy/src/js';

import { ShoppingCartIcon } from '@heroicons/react/24/outline'


export default function NavBar() {
    const navLinks = [
        { name: "Home", route: "home" },
        { name: "New Arrivals", route: "newArrivals" },
        { name: "Exclusive", route: "exclusive" },
        { name: "About us", route: "aboutUs" }
    ]
    const category = {
        browse: {
            routes: [
                { name: "All", sub: "browse.all" },
                { name: "Brands", sub: "browse.brands" },
                { name: "Shoes", sub: "browse.shoes" },
                { name: "Wearables", sub: "browse.wearables" },
                { name: "Accessories", sub: "browse.accessories" }
            ]
        }
    }
    return (
        <nav className="navbar">
            <div className="navbar-start">
                <div className="dropdown">
                    <label tabIndex={0} className="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabIndex={0} className="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        {navLinks.map((link, index) => (
                            <li key={index}><Link href={route(link.route)}>{link.name}</Link></li>
                        ))}
                        <li tabIndex={0}>
                            <a className="justify-between">
                                Parent
                                <svg className="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" /></svg>
                            </a>
                            <ul className="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a className="btn btn-ghost normal-case text-xl"><img src="assets/DreamMart.svg" alt="" /></a>
            </div>
            <div className="mx-center hidden lg:flex">
                <ul className="menu menu-horizontal px-1">
                    {navLinks.map((link, index) => (
                        <li key={index}><Link href={route(link.route)}>{link.name}</Link></li>
                    ))}
                    <li tabIndex={0}>
                        <a>
                            Browse
                            <svg className="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" /></svg>
                        </a>
                        <ul className="p-2 bg-base-100 transition-all z-10 overflow-visible">
                            {navLinks.map((link, index) => (
                                <li key={index}><Link >{link.name}</Link></li>
                            ))}
                        </ul>
                    </li>
                </ul>
            </div>
            <div className="navbar-end flex gap-5">
                <Link>
                    <ShoppingCartIcon className='w-6 h-6 font-semibold text-white'></ShoppingCartIcon>
                </Link>
                <Link className="text-primary font-semibold capitalize">Login</Link>
                <Link className="btn btn-primary font-medium capitalize">Register</Link>
            </div>

        </nav>
    )
}

