import { Head, usePage } from '@inertiajs/inertia-react';
import { NavBar, Alert, Footer } from '@/Components/';

export default function CommonLayout({ pageTitle, auth, messages, children, categories }) {
    return (
        <>
            <Head>
                <title>{pageTitle}</title>
            </Head>
            <main>
                <header>
                    <NavBar categories={categories} auth={auth}></NavBar>
                    <Alert messages={messages}></Alert>
                </header>
                <article>{children}</article>
                {/* <Footer></Footer> */}
            </main>

        </>
    );
}
