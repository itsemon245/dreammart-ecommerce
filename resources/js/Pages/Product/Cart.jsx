import { Link, usePage } from '@inertiajs/inertia-react'
import React from "react";
import DashboardLayout from "@/Layouts/DashboardLayout";
import TableWithCheck from "@/Components/Table/TableWithCheck";
import Checkout from "@/Components/Cart/Checkout";

export default function Cart({ categories, auth, carts }) {

    const {csrfToken} = usePage().props;
    return (
        <DashboardLayout pageTitle="Carts" categories={categories} auth={auth}>
            <TableWithCheck userId={auth.user.id} items={carts} />
            <div className="flex justify-center">
            <form
                action={route("checkout")}
                method='post'>
                    <input type="text" name='_token' value={csrfToken} hidden/>
                <button className='btn btn-primary rounded mt-2'>Checkout All</button>
            </form>
            </div>
        </DashboardLayout>
    );  
}
