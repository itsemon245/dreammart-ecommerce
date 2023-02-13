import React from 'react'
import CommonLayout from '@/Layouts/CommonLayout'
import { Link } from '@inertiajs/inertia-react'
import route from '/vendor/tightenco/ziggy/src/js'
export default function Index({ categories, auth }) {
    return (
        <CommonLayout categories={categories} pageTitle="Account" auth={auth} >

            <Link href={route('favorite.all')}>Favorites</Link>
        </CommonLayout>
    )
}
