import React from 'react'
import CommonLayout from './CommonLayout'
import Sidebar from '@/Components/Sidebar/Sidebar'

export default function DashboardLayout({ categories, auth, pageTitle, children }) {
    return (
        <CommonLayout categories={categories} pageTitle={pageTitle} auth={auth} >
            <div className='grid grid-cols-12 mt-10 mx-10'>
                <aside className='col-span-2'>
                    <Sidebar></Sidebar>
                </aside>
                <main className='col-span-10 bg-slate-900 rounded-lg rounded-l-none p-10'>
                    {children}
                </main>
            </div>
        </CommonLayout>
    )
}
