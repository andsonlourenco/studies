import React from 'react';

import LoadinfFeedShare from '../Shimmer/LoadinfFeedShare';
import LoadingFeedPost from '../Shimmer/LoadingFeedPost';
import FeedShare from './FeedShare';
import FeedPost from './FeedPost';

import { Container } from './styles';

const MiddleColumn: React.FC<LoadingProps> = ({ isLoading }) => {
  return (
    <Container className="middle-column">
      {isLoading ? (
        <>
          <LoadinfFeedShare />
          <LoadingFeedPost />
          <LoadingFeedPost />
          <LoadingFeedPost />
          <LoadingFeedPost />
        </>
      ) : (
        <>
          <FeedShare />
          <FeedPost />
          <FeedPost />
          <FeedPost />
          <FeedPost />
        </>
      )}
    </Container>
  );
};

export default MiddleColumn;
