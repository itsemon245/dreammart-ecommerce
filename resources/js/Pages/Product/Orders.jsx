import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import OrderTable from '@/Components/Table/OrderTable'

export default function Orders({ categories, auth, orders }) {
  const getSubTotal = (items) => {
    const subTotal = Number(items.map(item => item.product.price * item.qty).reduce((prev, next) => prev + next).toFixed(2))
    return subTotal;
  };
  return (
    <DashboardLayout pageTitle="Orders" categories={categories} auth={auth}>


      <OrderTable orders={orders}>

      </OrderTable>
    </DashboardLayout>
  )
}
