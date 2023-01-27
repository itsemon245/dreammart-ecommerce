import { Head, usePage } from '@inertiajs/inertia-react';
import { NavBar, Alerts, Footer } from '@/Components/';

export default function CommonLayout({ pageTitle, auth, messages, children }) {
    return (
        <>
            <Head>
                <title>{pageTitle}</title>
            </Head>
            <main>
                <header>
                    <NavBar auth={auth}></NavBar>
                    <Alerts messages={messages}></Alerts>
                </header>
                <article>{children}</article>
                <Footer></Footer>
            </main>

        </>
    );
}
