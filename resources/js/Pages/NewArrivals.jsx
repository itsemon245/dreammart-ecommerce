import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import NavBar from '/resources/js/Components/NavBar/NavBar';

export default function NewArrivals() {
    return (
        <>
            <Head>
                <meta name="description" content="this is new arrivals page of dream mart" />
                <title>New Arrivals</title>
            </Head>
            <div className='w-100' >
                <NavBar></NavBar>
            </div>

        </>
    )
}
