<?xml version="1.0"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ $feed->title }}</title>
        <link>{{ $feed->link }}</link>
        <description>{{ $feed->description }}</description>
        <language>en-us</language>
        <pubDate>{{ $feed->rssPublishedDate() }}</pubDate>
        <lastBuildDate>{{ \Carbon\Carbon::now()->toRssString() }}</lastBuildDate>
        <docs>http://blogs.law.harvard.edu/tech/rss</docs>
        <generator>RSSFeed.io</generator>
        <managingEditor>{{ $owner->email }}</managingEditor>
        <webMaster>{{ $owner->email }}</webMaster>
        @if (count($feedItems) > 0)
            @foreach ($feedItems as $feedItem)
                <item>
                    <title>{{ $feedItem->title }}</title>
                    @if (!empty($feedItem->link))
                        <link>{{ $feedItem->link }}</link>
                    @endif
                     @if (!empty($feedItem->description))
                        <description>{{ $feedItem->description }}</description>
                    @endif
                    <pubDate>{{ $feedItem->rssPublishedDate() }}</pubDate>
                </item>
            @endforeach
        @endif
    </channel>
</rss>