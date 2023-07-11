import route from "/vendor/tightenco/ziggy/src/js";
import useImage from "@/helper/useImage";
import { Link } from "@inertiajs/inertia-react";
import { AiFillDelete } from "react-icons/ai";
import { FaMoneyCheckAlt } from "react-icons/fa";
import { BsPlus, BsDash } from "react-icons/bs";
import { useState } from "react";
import { useMemo } from "react";
import axios from "axios";
export default function ({ item, keyVal }) {
    const [qty, setQty] = useState(item.qty);

    const total = useMemo(() => {
        let cost = item.product.price;
        let total = parseFloat((cost * qty).toFixed(2));

        return total;
    }, [qty]);

    function increment() {
        updateQty(item.id,qty+1)
    }
    function decrement() {
        if (qty>1) {
            updateQty(item.id,qty-1)
        }
    }
    function updateQty(id, qty){
        axios.patch(route('cart.update.qty', id), 
        {
            qty: qty
        },
        {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('[name="csrf_token"]').getAttribute('content')
            }
        }).then(response=>{
            setQty(response.data.data.qty);
        })
    }
    return (
        <tr>
            <th className="z-reset">{++keyVal}</th>
            <td>
                <div className="flex items-center space-x-3">
                    <div className="avatar">
                        <div className="aspect-square w-32 rounded-md">
                            <img
                                src={useImage(item.product.image)}
                                alt={item.product.name}
                                loading="lazy"
                            />
                        </div>
                    </div>
                    <div>
                        <div className="font-bold">{item.product.name} </div>
                        <div className="badge-secondary badge font-medium">
                            {item.product.brand.name}
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div className="flex align-center gap-3 text-lg font-medium">
                    <span>${item.product.price} X </span>
                    <div className="flex-inline align-center flex border border-slate-700 rounded">
                        <div className="rounded-l p-2 bg-primary">
                            <BsDash
                                className="text-base-300 font-semibold"
                                onClick={decrement}
                            ></BsDash>
                        </div>
                        <span className="bg-base-300 px-3 py-1">{qty}</span>
                        <div className="rounded-r p-2 bg-primary">
                            <BsPlus
                                className="text-base-300 font-semibold"
                                onClick={increment}
                            ></BsPlus>
                        </div>
                    </div>
                    <span>=</span>
                    <span>${total}</span>
                </div>
            </td>
            <td>
                <div className="flex items-center">
                    <Link
                        method="post"
                        href={route("checkout.product", item.product.id)}
                        data={{ qty: item.qty, cartId: item.id }}
                        as="button"
                        className="btn border-0 bg-transparent p-3 hover:bg-transparent"
                    >
                        <FaMoneyCheckAlt className="min-h-8 h-8 w-8 text-primary"></FaMoneyCheckAlt>{" "}
                    </Link>
                    <Link
                        href={route("cart.destroy", item.id)}
                        className="btn border-0 bg-transparent p-3 hover:bg-transparent"
                    >
                        <AiFillDelete className="min-h-6 h-6 w-6 text-error"></AiFillDelete>
                    </Link>
                </div>
            </td>
        </tr>
    );
}
