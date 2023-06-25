import React from 'react'
import { BiSearch } from 'react-icons/bi';
import { useEffect } from 'react';
import axios from 'axios';
import { useState } from 'react';
import route from '/vendor/tightenco/ziggy/src/js';
import { Link } from '@inertiajs/inertia-react';
import useImage from '@/helper/useImage';
export default function Search({ onSearchClickHandler }) {
    const [data, setData] = useState([])
    const [isLoading, setIsLoading] = useState(false)
    const [search, setSearch] = useState('')
    const onSearchHandler = e => {
        setIsLoading(prev => !prev)
        setSearch(e.target.value)
        setTimeout(() => {
            axios.get(`/search-product/${search}`)
                .then(results => {
                    setData(results.data.products)
                    setIsLoading(false)
                })
                .catch(error => {
                    console.log(error)
                    setData([])
                })
        }, 1500);
    }


    return (
        <>
            <div className='px-16'>
                <div className='flex flex-col w-full gap-2 px-10'>
                    <div className="flex gap-4 justify-center">
                        <div className="relative  grow">
                            <input
                                onChange={onSearchHandler}
                                placeholder="Search"
                                className="p-4 py-3 outline-none focus pr-10  bg-base-200 border border-primary rounded  text-slate-600  w-full leading-4"
                                value={search}
                            />
                            <BiSearch onClick={onSearchClickHandler}
                                className="text-slate-600 w-6 h-6 absolute pointer-events-none top-3 right-5"></BiSearch>
                        </div>
                        <button onClick={onSearchClickHandler} className="btn btn-outline btn-primary">
                            Close
                        </button>

                    </div>

                    {isLoading ?
                        <div
                            className="flex flex-col px-20 py-4 bg-base-200 border-t border-slate-600 rounded-md shadow z-20 "
                            id="drop-down-div_search_1"
                        >
                            {isLoading && <>Loading ....</>}
                        </div>

                        :

                        (
                            data.length > 0 &&

                            <div
                                className="flex flex-col px-20 py-4 bg-base-200 border-t border-slate-600 rounded-md shadow "
                                id="drop-down-div_search_1"
                            >

                                {
                                    data.map(product => (
                                        <div key={product.id} >
                                            <Link href={route('browse.product', product.id)} className="flex gap-5 mt-5">
                                                <div className='w-32 h-32 shadow-md flex gap-5'>
                                                    <img className='rounded-md' src={useImage(product.image)} alt={product.name} loading="lazy" />
                                                </div>
                                                <div>
                                                    <h1 className=' font-semibold text-xl '>{product.name}</h1>

                                                    <p>${product.price}</p>
                                                </div>
                                            </Link>
                                        </div>
                                    ))}
                            </div>
                        )
                    }

                </div>




                <style>
                    {`
        input[type="radio"]:checked + label {
  
          color: rgb(67 56 202);
        
        }
        @media (max-width: 492px) {
          .sets_search_1{
            justify-content: start;
          }
          /* width */
    ::-webkit-scrollbar {
      width: 5px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
      
        `}
                </style>
            </div>
        </>
    );
}
