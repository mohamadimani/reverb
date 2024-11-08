import './bootstrap';


console.log('[app] initialized.');



Echo.channel('post-like')
    .listen('PostLike', handlePostLikeEvent);



function handlePostLikeEvent(event) {
    console.log('made a post like');
}
