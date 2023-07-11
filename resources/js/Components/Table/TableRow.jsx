import route from "/vendor/tightenco/ziggy/src/js";
import useImage from "@/helper/useImage";
import { Link } from "@inertiajs/inertia-react";
import { AiFillDelete } from "react-icons/ai";
import { FaMoneyCheckAlt } from "react-icons/fa";
import { BsPlus, BsDash } from "react-icons/bs";
import { useState } from "react";
import { useMemo } from "react";
export default function ({ item, keyVal }) {
    const [qty, setQty] = useState(item.qty);

    const total = useMemo(() => {
        let cost = item.product.price;
        let total = Math.round(cost * qty);
    }, [qty]);

    function increment() {
        setQty((prev) => prev + 1);
    }
    function decrement() {
        setQty((prev) => prev - 1);
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
                <div className="flex-inline align-center flex gap-3 text-lg font-medium">
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
                    <span> = </span>
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
