import { Link } from '@inertiajs/inertia-react'
import React from "react";
import DashboardLayout from "@/Layouts/DashboardLayout";
import TableWithCheck from "@/Components/Table/TableWithCheck";
import Checkout from "@/Components/Cart/Checkout";

export default function Cart({ categories, auth, carts }) {
    return (
        <DashboardLayout pageTitle="Carts" categories={categories} auth={auth}>
            <TableWithCheck userId={auth.user.id} items={carts} />
            <div className="flex justify-center">
            <Link
                href={route("checkout")}
                as="button"
                className="btn-primary btn rounded mt-2"
            >
                Checkout All
            </Link>
            </div>
        </DashboardLayout>
    );
}
