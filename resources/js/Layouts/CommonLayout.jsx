import { Head, usePage } from '@inertiajs/inertia-react';
import { NavBar, Alert, Footer } from '@/Components/';
import Search from '@/Components/SearchBox/Search';
import { useState } from 'react';

export default function CommonLayout({ pageTitle, auth, messages, children, categories }) {
    const [showSearch, setShowSearch] = useState(false)

    const onSearchClickHandler = (e) => {
        setShowSearch(prevState => !prevState)
    }
    return (
        <>
            <Head>
                <title>{pageTitle}</title>
            </Head>
            <main>
                <header>
                    <NavBar onSearchClickHandler={onSearchClickHandler} categories={categories} auth={auth}></NavBar>
                {showSearch &&
                    <div className="py-12 bg-gray-700 dark:bg-gray-900 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 w-full h-full" id="modal">
                        <Search onSearchClickHandler={onSearchClickHandler}></Search>
                    </div>}
                <Alert messages={messages}></Alert>
            </header>
            <article>{children}</article>
            {/* <Footer></Footer> */}
        </main>

        </>
    );
}
