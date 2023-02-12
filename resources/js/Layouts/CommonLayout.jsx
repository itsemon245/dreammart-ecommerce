import { Head, usePage } from '@inertiajs/inertia-react';
import { NavBar, Alerts, Footer } from '@/Components/';

export default function CommonLayout({ pageTitle, auth, messages, children, categories }) {
    return (
        <>
            <Head>
                <title>{pageTitle}</title>
            </Head>
            <main>
                <header>
                    <NavBar categories={categories} auth={auth}></NavBar>
                    <Alerts messages={messages}></Alerts>
                </header>
                <article>{children}</article>
                {/* <Footer></Footer> */}
            </main>

        </>
    );
}
