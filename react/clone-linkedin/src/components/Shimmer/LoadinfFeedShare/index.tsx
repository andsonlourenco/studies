import React from 'react';

import { Container } from './styles';
import Panel from '../../Panel';
import Skeleton from '../../Skeleton';

const LoadinfFeedShare: React.FC = () => {
  return (
    <Container>
      <Panel className="no-shadow">
        <Skeleton className="row-skeleton" />
        <Skeleton className="row-skeleton" />
      </Panel>
    </Container>
  );
};

export default LoadinfFeedShare;
