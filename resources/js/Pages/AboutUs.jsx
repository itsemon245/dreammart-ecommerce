import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import NavBar from '/resources/js/Components/NavBar/NavBar';

export default function AboutUs() {
    return (
        <>
            <Head>
                <meta name="description" content="this is about us page of dream mart" />
                <title>About Us</title>
            </Head>
            <div className='w-100' >
                <NavBar></NavBar>
            </div>

        </>
    )
}
