import React, { useState } from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import { NavBar, Hero, Section } from '../Components/';
import { UserIcon } from '@heroicons/react/24/outline'
import Footer from '/resources/js/Components/Footer/Footer';


export default function App(props) {
    const carouselImages = [
        { name: "controller", src: "assets/carousel-img-controller.png" },
        { name: "watch", src: "assets/carousel-img-watch.png" },
        { name: "shoe", src: "assets/carousel-img-shoe.png" },
        { name: "watch2", src: "assets/carousel-img-watch-2.png" }
    ]
    const landingProducts = {
        newArrivals: [
            {
                name: "Toy Car -  T-001",
                image: "assets/landing-product-image.svg",
                frame: "assets/landing-product-frame.svg",
                category: "Toys",
                detail: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                price: 29.00,
                route: "",
                categoryRoute: ""
            },
            {
                name: "Nothing Smart Watch -  WA-001",
                image: "assets/landing-product-image.svg",
                frame: "assets/landing-product-frame.svg",
                category: "Toys",
                detail: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                price: 29.00,
                productRoute: "",
                categoryRoute: ""
            }
        ],
        mostPopular: [
            {
                name: "Nothing Smart Watch -  WA-001",
                image: "assets/landing-product-image.svg",
                frame: "assets/landing-product-frame.svg",
                category: "Toys",
                detail: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                price: 29.00,
                productRoute: "",
                categoryRoute: ""
            }
        ],
        spacialDeals: [
            {
                name: "Nothing Smart Watch -  WA-001",
                image: "assets/landing-product-image.svg",
                frame: "assets/landing-product-frame.svg",
                category: "Toys",
                detail: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                price: 29.00,
                productRoute: "",
                categoryRoute: ""
            }
        ]

    }


    return (
        <>
            <Head>
                <title>Home</title>
                <meta name="description" content="This is a e-commerce web application for 8th semester final project" />
            </Head>
            <div className='w-100' >
                <NavBar auth={props.auth}></NavBar>
                <Hero carouselImages={carouselImages}></Hero>
                <Section landingProducts={landingProducts.newArrivals} heading={"Live-Your-Dreams"} subTitle="New Arrivals"></Section>
                <Section landingProducts={landingProducts.mostPopular} heading={"Chosen-By-People"} subTitle="Most Popular"></Section>
                <Section landingProducts={landingProducts.spacialDeals} heading={"Our-Recommendation"} subTitle="Spacial Deals"></Section>
                <Footer></Footer>
            </div>
        </>
    );
}
