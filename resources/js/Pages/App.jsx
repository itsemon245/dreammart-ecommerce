import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import { NavLink, NavDropdown, Hero } from '../Components';
import route from '/vendor/tightenco/ziggy/src/js';
import SearchBox from '../Components/SearchBox/SearchBox';
import { UserIcon } from '@heroicons/react/24/outline'


export default function App() {
    return (
        <>
            <Head>
                <title>Laravel + React</title>
                <meta name="description" content="This is a e-commerce web application for 8th semester final project" />
            </Head>
            <div className='w-100' >
                <nav className='flex gap-x-4 items-center font-sans px-12 py-7 mb-10'>
                    <Link className="app-logo" href={route('home')}>
                        <img src="/assets/logo.svg" alt="app-logo" />
                    </Link>
                    <div className='mx-auto flex item-center gap-x-10'>
                        <NavLink active={true} href={route('home')} >
                            Home
                        </NavLink>
                        <NavDropdown />
                        <NavLink href={route('dashboard')} >
                            Explore
                        </NavLink>

                        <NavLink href={route('dashboard')} >
                            Contact Us
                        </NavLink>
                    </div>
                    <SearchBox />
                    <div className='ml-auto flex gap-4'>
                        <Link href={route('login')} className='btn btn-outline btn-primary font-medium hover:text-white '>Login</Link>
                        <button href="" className='btn btn-primary text-base-100 font-medium'>Register</button>
                    </div>
                </nav>

                <Hero></Hero>
            </div>
        </>
    );
}
