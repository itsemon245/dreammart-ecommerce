import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import Order from '@/Components/Orders/Order'

export default function Orders({ categories, auth, orders }) {
  console.log(orders)
  const getSubTotal = (items) => {
    const subTotal = Number(items.map(item => item.product.price * item.qty).reduce((prev, next) => prev + next).toFixed(2))
    return subTotal;
  };
  const shipping = 10
  return (
    <DashboardLayout pageTitle="Orders" categories={categories} auth={auth}>


      <div className="">
        {orders.length === 0 ? <p className='text-center'>Noting to show in orders</p>
          :
          <>
            {orders.map(order => (
              <div className="mt-10" key={order.id}>
                <div className="flex justify-start item-start space-y-2 flex-col ">
                  <div className="flex gap-5 items-center"><h1 className="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9  text-gray-200">Order # {order.id}</h1>
                    <span className='badge badge-primary'>{order.status}</span></div>
                  <p className="text-base font-medium leading-6 text-gray-400">{order.created_at}</p>
                </div>
                <div className="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch  w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
                  <div className="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div className="flex flex-col justify-start items-start bg-base-200 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                      <p className="text-lg md:text-xl font-semibold leading-6 xl:leading-5 text-gray-200 mb-5">Order Items</p>

                      {/* order item  */}
                      {order.items.map(item => (
                        <div key={item.id} className="mt-6 md:mt-0 flex justify-start flex-col md:flex-row  items-start md:items-center space-y-4  md:space-x-6 xl:space-x-8 w-full ">
                          <div className="w-full md:w-40">
                            <img className="w-full hidden md:block" src={`/storage/${item.product.image}`} alt={item.product.name} />
                            <img className="w-full md:hidden" src={`/storage/${item.product.image}`} alt={item.product.name} />
                          </div>
                          <div className="  flex justify-between items-start w-full flex-col md:flex-row space-y-4 md:space-y-0  ">
                            <div className="w-full flex flex-col justify-start items-start space-y-8">
                              <h3 className="text-xl xl:text-2xl font-semibold leading-6 text-gray-200">{item.product.name}
                                <span className="text-base xl:text-lg leading-6 text-gray-200">{" X " + item.qty}</span></h3>
                            </div>
                            <div className="flex justify-between space-x-8 items-start w-full">

                              <p className="text-base xl:text-lg font-semibold leading-6 text-gray-200">{`$${item.product.price} x ${item.qty}`}
                                <span className="text-primary"> = ${item.product.price * item.qty}</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      ))}
                    </div>
                    <div className="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                      <div className="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-base-200 space-y-6   ">
                        <h3 className="text-xl font-semibold leading-5 text-gray-200">Summary</h3>
                        <div className="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                          <div className="flex justify-between  w-full">
                            <p className="text-base leading-4 text-gray-200">Subtotal</p>
                            <p className="text-base leading-4 text-gray-400">${getSubTotal(order.items)}</p>
                          </div>
                          <div className="flex justify-between items-center w-full">
                            <p className="text-base leading-4 text-gray-200">Shipping</p>
                            <p className="text-base leading-4 text-gray-400">${shipping}</p>
                          </div>
                        </div>
                        <div className="flex justify-between items-center w-full">
                          <p className="text-base font-semibold leading-4 text-gray-200">Total</p>
                          <p className="text-base font-semibold leading-4 text-gray-400">${getSubTotal(order.items) + shipping}</p>
                        </div>
                      </div>
                      <div className="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-base-200 space-y-6   ">
                        <h3 className="text-xl font-semibold leading-5 text-gray-200">Shipping</h3>
                        <div className="flex justify-between items-start w-full">
                          <div className="flex justify-center items-center space-x-4">
                            <div class="w-8 h-8">
                              <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                            </div>
                            <div className="flex flex-col justify-start items-center">
                              <p className="text-lg leading-6 font-semibold text-gray-200">
                                DPD Delivery
                                <br />
                                <span className="font-normal">Delivery with 24 Hours</span>
                              </p>
                            </div>
                          </div>
                          <p className="text-lg font-semibold leading-6 text-gray-200">${shipping}</p>
                        </div>
                        <div className="w-full flex justify-center items-center">
                          <button className="hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">View Carrier Details</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            ))}
          </>}
      </div>
    </DashboardLayout>
  )
}
